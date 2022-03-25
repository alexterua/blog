<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Models\Comment;

class EditController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        $comments = auth()->user()->comments;
        $likedPosts = auth()->user()->likedPosts;

        return view('profile.comment.edit', compact('comment', 'comments', 'likedPosts'));
    }
}
