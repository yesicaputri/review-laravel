<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataPost = DB::table('posts')->get();
        return view('post.index', compact('dataPost'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $query = DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);

        return redirect('/post');
        // dd($request);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $showPostById = DB::table('posts')->where('id', $post->id)->first();
        return view('post.show', compact('showPostById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $showPostById = DB::table('posts')->where('id', $post->id)->first();
        // var_dump($showpostbyid);
        return view('post.edit', compact('showPostById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $query = DB::table('posts')
        ->where('id', $post->id)
        ->update([
        'title'          => $request["title"],
        'body'           => $request["body"]
    ]);
    return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $query = DB::table('posts')->where('id', $post->id)->delete();

        return redirect('/post');
    }
}
