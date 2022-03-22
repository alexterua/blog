<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.index', compact('posts', 'categories', 'tags'));
    }
}
