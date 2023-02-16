<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clothe;
use App\Models\category;

class ClotheController extends Controller
{
    public function index(){
        $clothes = Clothe::get();
        $categories = Category::where('status',1)->get();
        return view('admin.pages.clothe.index' , compact('clothes','categories'));
    }
    public function create(){
        $clothes = Clothe::get();
        return view('admin.pages.clothe.index', compact('clothes'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
            
        }
        $store = Clothe::create([
            'name' =>$request->name,
            'category_id' =>$request->category_id,
            'price' =>$request->price,
            'description' =>$request->description,
            'status' =>$request->status,
            'image' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('clothe.index')->with('success','clothe Added');
        }
        else{
            return redirect()->route('clothe.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($id)
    {
        $clothes = Clothe::get();
        $clothe =  Clothe::where('id' , $id)->firstorfail();
        $categories = Category::where('status',1)->get();
        return view('admin.pages.clothe.index' , compact('clothes','clothe','categories'));
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
            'name' => 'required|max:191',
            'category_id' => 'required',
            'price' => 'required|max:191',
            'description' => 'required',
            'status' => 'required',
        ]);

        $imageData =   Clothe::where('id',$id)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }

    $update =  Clothe::where('id',$id)->update([
        'name' =>$request->name,
        'category_id' =>$request->category_id,
        'price' =>$request->price,
        'description' =>$request->description,
        'status' =>$request->status,
        'image' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('clothe.index')->with('success','clothe update');
    }
    return redirect()->route('clothe.index')->with('error','something went wrong');
    }
    public function delete($id){
        $clothe =  Clothe::where('id',$id)->first();
        if(!empty($clothe)){
         $clothe->delete();
         return redirect()->route('clothe.index')->with('success','clothe delete');
        }
        return redirect()->route('clothe.index')->with('error','record not found');
    }
}
