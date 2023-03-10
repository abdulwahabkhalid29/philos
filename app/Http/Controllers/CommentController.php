<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Blog;

class CommentController extends Controller
{

        public function store(Request $request){
            if(auth()->check()){
                $request->validate([
                    'comment' => 'required',
                    'blog_id' => 'required',
                ]);
                $store = comment::create([
                    'comment' => $request->comment,
                    'user_id' => auth()->user()->id,
                    'blog_id' => $request->blog_id,
                ]);
                if(!empty($store->id)){
                    return redirect()->route('pages.blog',$request->blog_id)->with('success','Comment Added');
                }
                return redirect()->route('pages.blog',$request->blog_id)->with('error','Something Went Wrong');
            }
            else{
                return redirect()->route('login')->with('error','Please login first');
    
            }
        }
}