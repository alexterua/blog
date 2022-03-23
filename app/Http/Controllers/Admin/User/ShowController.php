<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();

        return view('admin.user.show', compact('user', 'users', 'categories', 'tags', 'posts'));
    }
}
