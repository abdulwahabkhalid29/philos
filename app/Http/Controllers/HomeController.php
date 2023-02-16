<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothe;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role_id == 1){
            $pages = Page::where('status',1)->get();
            $user = User::where('role_id',2)->first();
            $clothe = Clothe::where('status',1)->first();
            return view('admin.pages.dashboard',compact('user','clothe','pages'));
        }
        elseif(auth()->user()->role_id == 2){
            $clothes = Clothe::get();
            $brands = Brand::where('status',1)->get();
            $sliders = Slider::get();
            $blogs = Blog::get();
            $categories = Category::get();
            $pages = Page::where('status',1)->get();
            $popularPosts = Clothe::orderBy('views','DESC')->take(4)->get();
            return view('pages.index',compact('clothes','brands','sliders','popularPosts','blogs','categories','pages'));
        }
    }
}
