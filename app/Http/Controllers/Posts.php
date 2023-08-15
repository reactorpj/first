<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Posts extends Controller
{
    public function index()
    {
        $posts = [['id' => 1], ['id' => 2]];
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $fields = $request->all(['title', 'content']);
        Post::create($fields);
    }

    public function edit(Request $request, int $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit');
    }
}
