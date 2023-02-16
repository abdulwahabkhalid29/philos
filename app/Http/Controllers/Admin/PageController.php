<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index(){
        $pages = Page::get();
        return view('admin.pages.page.index' , compact('pages'));
    }
    public function create(){
        $pages = Page::get();
        return view('admin.pages.page.index', compact('pages'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        
        $store = Page::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'status' =>$request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('page.index')->with('success','page Added');
        }
        else{
            return redirect()->route('page.index')->with('error','Something Went Wrong');
        }
    }
    public function edit($id)
    {
        $pages = Page::get();
        $page =  Page::where('id' , $id)->firstorfail();
        return view('admin.pages.page.index' , compact('pages','page'));
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
            'description' => 'required',
            'status' => 'required',
        ]);
    $update =  Page::where('id',$id)->update([
        'title' =>$request->title,
        'description' =>$request->description,
        'status' =>$request->status,
    ]);
    if($update > 0){
        return redirect()->route('page.index')->with('success','page update');
    }
    return redirect()->route('page.index')->with('error','something went wrong');
    }
    public function delete($id){
        $page =  Page::where('id',$id)->first();
        if(!empty($page)){
         $page->delete();
         return redirect()->route('page.index')->with('success','page delete');
        }
        return redirect()->route('page.index')->with('error','record not found');
    }
}
