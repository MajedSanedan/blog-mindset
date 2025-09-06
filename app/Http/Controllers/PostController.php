<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        $categories= Category::all();
        return view('admin.post.create',compact('categories'));
    }
    public function store(Request $request)
    {
     
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_ids' => 'array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        if($request->hasFile('image'))
        {
              $imageurl = $request->file('image')->storeAs('posts', time().'.'.$request->image->extension(),'public');
        }
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' =>  Auth::id(),
            'image' => $imageurl ?? null,
        ]);

        if ($request->has('category_ids')) {
            $post->categories()->attach($request->category_ids);
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'category_ids' => 'array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $post->update($request->only('title', 'content'));

        if ($request->has('category_ids')) {
            $post->categories()->sync($request->category_ids);
        }

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
}
