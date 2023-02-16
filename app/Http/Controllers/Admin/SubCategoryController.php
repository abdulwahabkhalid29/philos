<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function index(){
        $sub_categories = SubCategory::get();
        $categories = Category::where('status',1)->get();
        return view('admin.pages.sub_category.index' , compact('sub_categories','categories'));
    }
    public function create(){
        $sub_categories = SubCategory::get();
        return view('admin.pages.sub_category.index', compact('sub_categories'));
    }
    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'status' => 'required',
        ]);
           if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
            
        }
        $store = SubCategory::create([
            'category_id' =>$request->category_id,
            'status' =>$request->status,
            'image' =>$imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('sub_category.index')->with('success','sub_category Added');
        }
        else{
            return redirect()->route('sub_category.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($id)
    {
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        $sub_category = SubCategory::where('id',$id)->first();
        return view('admin.pages.sub_category.index' , compact('sub_categories','sub_category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            'category_id' => 'required',
            'status' => 'required',
        ]);
        $imageData =   SubCategory::where('id',$id)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }

    $update =  SubCategory::where('id',$id)->update([
        'category_id' =>$request->category_id,
        'status' =>$request->status,
        'image' =>$imageName,
    ]);
    if($update > 0){
        return redirect()->route('sub_category.index')->with('success','sub_category update');
    }
    return redirect()->route('sub_category.index')->with('error','something went wrong');
    }
    public function delete($id){
        $sub_category =  SubCategory::where('id',$id)->first();
        if(!empty($sub_category)){
         $sub_category->delete();
         return redirect()->route('sub_category.index')->with('success','sub_category delete');
        }
        return redirect()->route('sub_category.index')->with('error','record not found');
    }
}
