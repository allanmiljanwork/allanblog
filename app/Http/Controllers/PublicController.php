<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Models\{Post, Tag, User};

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::with('images', 'user')->withCount('comments', 'likes', 'tags')->latest()->paginate(16);
        return view('welcome', compact('posts'));
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }

    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->with('images', 'user', 'tags')->withCount('comments', 'likes')->latest()->paginate(16);
        return view('welcome', compact('posts'));
    }

    public function user(User $user)
    {
        $posts = $user->posts()->with(['images', 'tags'])->withCount(['comments', 'likes'])->latest()->paginate(16);

        return view('user', compact('user', 'posts'));
    }

}
