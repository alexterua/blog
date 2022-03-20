<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.category.edit', compact('category', 'categories', 'tags'));
    }
}
