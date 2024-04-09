<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class pagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function posts(){
        $post = Posts::get();
        return view('posts', ['posts' => $post]);
    }

    public function post($post){
        $post_group = Posts::where('slug', $post)->get();
        return view('post', ['post' => $post_group]);
    }
}
