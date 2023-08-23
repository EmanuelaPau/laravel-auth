<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = \App\Models\Admin\Post::paginate(15);
        // @dd($posts);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.post.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate(
            [
                'title' => ['required', 'unique:posts', 'max:255'],
                'author' => ['required', 'max:255'],
                'content' => ['required', ''],
                'image' => ['url:https'],
            ]

        );
        $data['slug'] = Str::of($data['title'])->slug('-');
        $newPost = new \App\Models\Admin\Post;
        $newPost = \App\Models\Admin\Post::create($data);
        return redirect()->route('admin.posts.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Admin\Post $post)
    {
        return view('admin.post.show', compact('post'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        // dd($request->all());
        $data = $request->validate(
            [
                'title' => ['required', 'max:255', Rule::unique('posts')->ignore($post->id)],
                'author' => ['required', 'max:255'],
                'content' => ['required', ''],
                'image' => ['url:https'],
            ]

        );
        $data['slug'] = Str::of($data['title'])->slug('-');
        $post->update($data);

        return redirect()->route('admin.posts.show', compact('post'));
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('admin.posts.index');
        // dd($post);
    }
}