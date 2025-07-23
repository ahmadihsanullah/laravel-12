<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048', // max 2MB
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->storeAs('profile', uniqid() . '.' . $photo->getClientOriginalExtension(), ['disk' => 'public']);
        }

        $post = Post::create([
            'title' => $request->title,
            'photo' => $path ?? null,
        ]);

        return response()->json([
            'message' => 'Post created successfully',
            'data' => $post
        ], 201);
    }

    public function show(Post $post)
    {
        return response()->json([
            'data' => $post
        ]);
    }
}
