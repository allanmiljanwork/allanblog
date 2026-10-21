<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\{StorePostRequest, UpdatePostRequest};
use App\Models\Post;
=======
use Illuminate\Support\Facades\{Auth, Storage, URL};

use App\Models\{Image, Post};
use App\Http\Requests\{StorePostRequest, UpdatePostRequest};
>>>>>>> windows

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $posts = Post::orderBy('id', 'ASC')->simplePaginate();
=======
        $posts = Post::latest()->with(['images', 'user'])->simplePaginate();
        if (request()->wantsJson()) {
            return $posts;
        }
>>>>>>> windows
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post($request->validated());
<<<<<<< HEAD
        $post->save();
=======
        $post->category()->associate(1);
        if ($request->wantsJson()) {
            $post->user()->associate(1);
        } else {
            $post->user()->associate(Auth::user());
        }
        $post->save();

        if ($request->file('images')) {
            foreach ($request->file('images') as $uploadedFile) {

                $image = new Image();
                $image->pic = $uploadedFile->store('', 'public');
                $image->post()->associate($post);
                $image->save();
            }
        }

        if ($request->wantsJson()) {
            return $post;
        }

>>>>>>> windows
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
<<<<<<< HEAD
=======
        if ($request->wantsJson()) {
            return $post;
        }
>>>>>>> windows
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
<<<<<<< HEAD
=======

        if (request()->wantsJson()) {
            return $post;
        }

>>>>>>> windows
        return redirect()->route('posts.index');
    }
}
