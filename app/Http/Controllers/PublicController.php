<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

=======
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Models\{Category, Post, Tag, User};

>>>>>>> windows
class PublicController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $posts = Post::paginate(16);
=======
        $posts = Post::with('images', 'user')->withCount('comments', 'likes', 'tags')->latest()->paginate(16);
>>>>>>> windows
        return view('welcome', compact('posts'));
    }

    public function post(Post $post)
    {
<<<<<<< HEAD
=======
        if (request()->wantsJson()) {
            return $post;
        }

>>>>>>> windows
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
<<<<<<< HEAD
}
=======

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

    public function category(Category $category)
    {
        $posts = $category->posts()->with('images', 'user', 'tags')->withCount('comments', 'likes')->latest()->simplePaginate(16);
        return view('welcome', compact('posts'));
    }

}
>>>>>>> windows
