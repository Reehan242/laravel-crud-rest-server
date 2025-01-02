<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        if (Route::currentRouteName() === 'api.index') {
            return response()->json([
                'success' => true,
                'data' => $posts,
            ]);
        } else {
            return view('posts.index', compact('posts'));
        }

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required|max:256'
        ]);

        $newPost = Post::create($data);

        return response()->json([
            'success' => true,
            'data' => $newPost,
            'message' => 'Post berhasil ditambahkan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        if($request->has('body') || $request->has('title')){
            if ($request->has('body')) {
                $validatedBody = $request->validate([
                    'body' => 'max:256'
                ]);
                $post->update([
                    'body' => $validatedBody['body']
                ]);
            }
            if ($request->has('title')) {
                $validatedTitle = $request->validate([
                    'title' => 'max:256'
                ]);
                $post->update([
                    'title' => $validatedTitle['title']
                ]);
            }

            return response()->json([
                'success' => true,
                'data' => $post,
                'message' => 'Post berhasil diubah'
            ]);
        } else
        {
            return response()->json([
                'success' => false,
                'data' => $request,
                'message' => 'No change made'
            ]);
        }

        
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'Post berhasil dihapus'
        ]);
    }
}
