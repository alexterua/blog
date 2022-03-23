<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::all();
        $users = User::all();

        return view('admin.tag.show', compact('tag', 'tags', 'categories', 'posts', 'users'));
    }
}
