<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();

        return view('admin.user.create', compact('users', 'categories', 'tags', 'posts'));
    }
}
