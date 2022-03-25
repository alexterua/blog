<?php

namespace App\Http\Controllers\Profile\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post);

        return redirect()->route('profile.liked.index');
    }
}
