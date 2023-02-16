<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        return view('admin.pages.slider.index' , compact('sliders'));
    }
    public function create(){
        $sliders = Slider::get();
        return view('admin.pages.slider.index', compact('sliders'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'link' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
            
        }
        $store = Slider::create([
            'title' => $request->title,
            'name' =>$request->name,
            'link' =>$request->link,
            'status' =>$request->status,
            'image' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('slider.index')->with('success','Slider Added');
        }
        else{
            return redirect()->route('slider.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($id)
    {
        $sliders = Slider::get();
        $slider = Slider::where('id' , $id)->firstorfail();
        return view('admin.pages.slider.index' , compact('sliders','slider'));
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
            'title' => 'required|max:191',
            'name' => 'required|max:191',
            'link' => 'required|max:191',
            'status' => 'required',
        ]);

        $imageData = Slider::where('id',$id)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }

    $update = Slider::where('id',$id)->update([
        'title' => $request->title,
        'name' =>$request->name,
        'link' =>$request->link,
        'status' =>$request->status,
        'image' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('slider.index')->with('success','Slider update');
    }
    return redirect()->route('slider.index')->with('error','something went wrong');
    }
    public function delete($id){
        $slider = Slider::where('id',$id)->first();
        if(!empty($slider)){
         $slider->delete();
         return redirect()->route('slider.index')->with('success','Slider delete');
        }
        return redirect()->route('slider.index')->with('error','record not found');
    }
}
