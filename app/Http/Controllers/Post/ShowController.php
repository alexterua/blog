<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = new Carbon($post->updated_at);
        $date = $date->format("M d, Y • h:i a");

        return view('post.show', compact('post', 'date'));
    }
}
