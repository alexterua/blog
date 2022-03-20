<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit', compact('post', 'posts', 'categories', 'tags'));
    }
}
