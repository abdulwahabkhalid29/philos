<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Page;

class ContactController extends Controller
{
    public function index(){
        $pages = Page::where('status',1)->get();
        $messages = Message::get();
        return view('pages.contact' , compact('messages','pages'));
    }
    public function create(){
        $messages = Message::get();
        return view('pages.contact', compact('messages'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'number' => 'required',
            'comment' => 'required',
        ]);
        $store = Message::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'number' =>$request->number,
            'comment' =>$request->comment,
        ]);

        if(!empty($store->id)){
            return redirect()->route('pages.contact')->with('success','contact Added');
        }
        else{
            return redirect()->route('pages.contact')->with('error','Something Went Wrong');
        }
    }
}
