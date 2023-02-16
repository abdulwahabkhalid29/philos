<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;
use App\Models\Comment;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Blog;
use App\Models\Page;
use App\Models\User;

class FrontendController extends Controller
{
    public function index(){
        $clothes = Clothe::get();
        $brands = Brand::where('status',1)->get();
        $pages = Page::where('status',1)->get();
        $sliders = Slider::get();
        $blogs = Blog::get();
        $categories = SubCategory::get();
        $popularPosts = Clothe::orderBy('views','DESC')->take(4)->get();
        return view('pages.index',compact('clothes','brands','sliders','popularPosts','blogs','categories','pages','pages'));
    }
    public function checkout(){
        $pages = Page::get();
        return view('pages.checkout',compact('pages'));
    }
    public function list($id){
        $categoryID = Category::where('id',$id)->firstorfail();
        $clothes = Clothe::where('category_id', $categoryID->id)->get();
        $clothe = Category::where('id',$id)->firstorfail();
        $pages = Page::where('status',1)->get();
        $popularPosts = Clothe::orderBy('views','DESC')->take(4)->get();
        return view('pages.list',compact('clothe','clothes','popularPosts','pages'));
    }
    public function cart(){
        return view('pages.cart');
    }
    public function detail($id){
        $pages = Page::where('status',1)->get();
        $clothe = Clothe::where('id',$id)->firstorfail();
        $oldViews = $clothe->views;
        $newViews = $oldViews + 1;
        Clothe::where('id',$id)->update(['views' => $newViews]);
        $categoryID = Clothe::where('id',$id)->firstorfail();
        $clothes = Clothe::where('category_id', $categoryID->category_id)->get();
        return view('pages.detail',compact('clothe','clothes','pages'));
    }
    public function dashboard(){
        $clothe = Clothe::where('status',1)->firstorfail();
        $user = User::where('role_id',1)->firstorfail();
        return view('admin.pages.dashboard', compact('clothe','user'));
    }
    public function page($id){
        $page = Page::where('id',$id)->first();
        $pages = Page::where('status',1)->get();
        return view('pages.page',compact('page','pages'));
    }
        public function blog($id){
        $comments = Comment::where('blog_id',$id)->get();
        $blog = blog::where('id',$id)->firstorfail();
        $pages = Page::where('status',1)->get();
        $blogs = Blog::orderBy('id','DESC')->take(3)->get();
        $popularPosts = Clothe::orderBy('views','DESC')->take(4)->get();
        return view('pages.blog',compact('blog','blogs','popularPosts','comments','pages'));
    }

    public function brand($id){
        $pages = Page::where('status',1)->get();
        $brand = Brand::where('status',1)->firstorfail();
        $categoryID = Category::where('status',1)->firstorfail();
        $brands = Brand::get();
        $clothes = Clothe::where('category_id', $categoryID->id)->get();
        return view('pages.brand',compact('brand','clothes','brands','pages'));
    }

}  
