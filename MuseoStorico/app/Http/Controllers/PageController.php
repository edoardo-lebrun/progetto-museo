<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function getSingle($post_slug)
    {
        $post = Post::where('post_slug', '/', $post_slug)->first();

        return view('news.page', ['post' => $post]);

    }
}
