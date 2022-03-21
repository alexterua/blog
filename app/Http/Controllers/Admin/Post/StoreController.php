<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['image_preview'] = Storage::put('images/post_preview/', $data['image_preview']);
        $data['image_main'] = Storage::put('images/post_main/', $data['image_main']);

        Post::firstOrCreate($data);

        return redirect()->route('admin.post.index');
    }
}
