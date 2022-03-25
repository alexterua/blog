<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Models\Comment;

class DestroyController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        // Without Soft Deletes
        $comment->delete();

        return redirect()->route('profile.comment.index');
    }
}
