<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Str;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view('admin.pages.blog.index' ,compact('blogs'));
    }
    public function create(){
        $blogs = Blog::get();
        return view('admin.pages.blog.index', compact('blogs'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
            
        }
        $slug = Str::slug($request->name, '-');
        $store = Blog::create([
            'name' =>$request->name,
            'title' =>$request->title,
            'description' =>$request->description,
            'status' =>$request->status,
            'link' =>$request->link,
            'slug' => $slug,
            'image' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('blog.index')->with('success','blog Added');
        }
        else{
            return redirect()->route('blog.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($slug)
    {
        $blogs = Blog::get();
        $blog = Blog::where('slug' , $slug)->firstorfail();
        return view('admin.pages.blog.index' , compact('blogs','blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        $imageData = Blog::where('slug',$slug)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
    $update = Blog::where('slug',$slug)->update([
        'name' =>$request->name,
        'title' =>$request->title,
        'description' =>$request->description,
        'link' =>$request->link,
        'slug' =>$request->slug,
        'status' =>$request->status,
        'image' =>$imageName,
    ]);
    if($update > 0){
        return redirect()->route('blog.index')->with('success','blog update');
    }
    return redirect()->route('blog.index')->with('error','something went wrong');
    }
    public function delete($slug){
        $blog = Blog::where('slug',$slug)->first();
        if(!empty($blog)){
         $blog->delete();
         return redirect()->route('blog.index')->with('success','blog delete');
        }
        return redirect()->route('blog.index')->with('error','record not found');
    }
}
