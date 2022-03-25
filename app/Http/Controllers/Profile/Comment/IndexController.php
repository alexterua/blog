<?php

namespace App\Http\Controllers\Profile\Comment;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        $likedPosts = auth()->user()->likedPosts;

        return view('profile.comment.index', compact('comments', 'likedPosts'));
    }
}
