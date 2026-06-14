<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Models\Post;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(16);
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
}
