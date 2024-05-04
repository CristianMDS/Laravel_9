<?php

namespace App\Http\Controllers;

use App\Models\Posts;

// use App\Http\Requests\StorePostsRequest;
// use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', [
            "posts" => Posts::latest()->paginate(),
        ]);
    }

    /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Posts  $posts
         * @return \Illuminate\Http\Response
    */

    public function destroy(Posts $post)
    {
        $post->delete();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Posts $post)
    {
        return view('posts.create', ['posts' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        return view('posts.edit', ['posts' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required | unique:posts,slug',
            'body' => 'required'
        ], [
            'title.required' => 'El titulo es requerido',
            'slug.required' => 'Este campo es obligatorio',
            'slug.unique' => 'Este valor ya existe, busca uno nuevo',
            'body.required' => 'Es necesario llenar este campo'
        ]);
        $send = $request->user()->posts()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            // 'slug' => Str::slug($title),
            'body' => $request->body
        ]);
        return redirect()->route('posts.edit', $send);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostsRequest  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required | unique:posts,slug,'.$post->id,
            'body' => 'required'
        ], [
            'title.required' => 'El titulo es requerido',
            'slug.required' => 'Este campo es obligatorio',
            'slug.unique' => 'Este valor ya existe, busca uno nuevo',
            'body.required' => 'Es necesario llenar este campo'
        ]);
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body
        ]);
        return redirect()->route('posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        //
    }



}
