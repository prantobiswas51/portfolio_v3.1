<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        $posts = Post::where('status', 'Published')->get();
        return view('posts', compact('posts'));
    }

    public function single_post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        if (!$post->status == 'Published') {
            abort(403, 'You do not have permission to view this post.');
        }

        $post->increment('views');
        return view('post_view', compact('post'));
    }

    public function works()
    {
        $works = '';
        return view('works', compact('works'));
    }
}
