<?php

namespace App\Http\Controllers\Profile\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $likedPosts = auth()->user()->likedPosts;
        $comments = auth()->user()->comments;

        return view('profile.liked.index', compact('likedPosts', 'comments'));
    }
}
