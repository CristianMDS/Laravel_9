<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class pagesController extends Controller
{
    public function home(Request $request){
        $search = $request->search;
        $post = Posts::where('title', 'LIKE', "%$search%")
                        ->with('user')
                        ->latest()
                        ->paginate();
        return view('home', ['posts' => $post]);
    }

    public function post($post){
        $post_group = Posts::where('slug', $post)->get();
        return view('post', ['post' => $post_group]);
    }
}
