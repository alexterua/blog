<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Category $category)
    {
        $data = request()->validate([
            'title' => 'string|max:255|required',
        ]);

        $category = $category->update($data);

        return redirect()->route('admin.category.index');
    }
}
