<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $dateUpdated = Carbon::parse($post->updated_at);

        $relatedPosts = Post::where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);

        return view('post.show', compact('post', 'dateUpdated', 'relatedPosts'));
    }
}
