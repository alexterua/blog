<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        $roles = User::getRoles();

        return view('admin.user.edit', compact('user', 'users', 'categories', 'tags', 'posts', 'roles'));
    }
}
