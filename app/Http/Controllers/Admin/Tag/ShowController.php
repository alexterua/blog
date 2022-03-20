<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::all();

        return view('admin.tag.show', compact('tag', 'tags', 'categories', 'posts'));
    }
}
