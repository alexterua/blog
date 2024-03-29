<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);

        $likedPosts = Post::withCount('likedUsers')->orderByDesc('liked_users_count')->get()->take(4);
        $lastUpdatedPosts = Post::orderByDesc('updated_at')->get()->random(3);

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts', 'lastUpdatedPosts'));
    }
}
