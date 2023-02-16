<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('admin.pages.category.index' ,compact('categories'));
    }
    public function create(){
        $categories = Category::get();
        return view('admin.pages.category.index', compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191',
            'status' => 'required',
        ]);
        $slug = Str::slug($request->name, '-');
        $store = Category::create([
            'name' =>$request->name,
            'status' =>$request->status,
            'slug' => $slug,

        ]);

        if(!empty($store->id)){
            return redirect()->route('category.index')->with('success','Category Added');
        }
        else{
            return redirect()->route('category.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($slug)
    {
        $categories = Category::get();
        $category = Category::where('slug' , $slug)->firstorfail();
        return view('admin.pages.category.index' , compact('categories','category'));
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
            'name' => 'required|max:191',
            'status' => 'required',
        ]);
   
    $update = Category::where('slug',$slug)->update([
        'name' =>$request->name,
        'status' =>$request->status,
    ]);
    if($update > 0){
        return redirect()->route('category.index')->with('success','Category update');
    }
    return redirect()->route('category.index')->with('error','something went wrong');
    }
    public function delete($slug){
        $category = Category::where('slug',$slug)->first();
        if(!empty($category)){
         $category->delete();
         return redirect()->route('category.index')->with('success','Category delete');
        }
        return redirect()->route('category.index')->with('error','record not found');
    }

}