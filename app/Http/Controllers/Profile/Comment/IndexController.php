<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        $users = User::all();

        return view('profile.comment.index', compact('categories', 'tags', 'posts', 'users'));
    }
}
