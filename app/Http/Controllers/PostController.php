<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            // Add more validation rules as per your post fields
        ]);

        // Create a new post
        $post = Post::create($validatedData);

        // Redirect or do further processing
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            // Add more validation rules as per your post fields
        ]);

        // Find the post
        $post = Post::findOrFail($id);

        // Update the post
        $post->update($validatedData);

        // Redirect or do further processing
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        // Find the post
        $post = Post::findOrFail($id);

        // Delete the post
        $post->delete();

        // Redirect or do further processing
        return redirect()->route('posts.index');
    }
}
