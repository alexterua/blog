<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        $users = User::all();

        return view('admin.post.edit', compact('post', 'posts', 'categories', 'tags', 'users'));
    }
}
