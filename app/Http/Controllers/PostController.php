<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Coment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit',]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        if($posts == null)
        {
            abort(404);
        }

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'content'  => 'required', 'string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        

        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $imageName);
        }
        

        auth()->user()->posts()->create([
            'content' => $data['content'],
            'image' => $imageName,
        ]);

        return back()->with('success', 'تم إضافة المنشور بنجاح !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if($post == null)
        {
            abort(404);
        }
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if($post == null)
        {
            abort(404);
        }
        //$this->authorize('update', $shortcut);
        return view('posts.edit', ['post' => $post]); 
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
        $data = $request->validate([
            'content'  => 'required', 'string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        

        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $imageName);
        }
        

        $post->update([
            'content' => $data['content'],
            'image' => $imageName,
        ]);
        return redirect('/posts/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post == null)
        {
            abort(404);
        }
        $post->delete();
        return redirect('/posts');
    }
}
