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
        try {
            $data = $request->validated();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
            $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);
        } catch (\Exception $exception) {
            abort('404');
        }

        return redirect()->route('admin.post.index');
    }
}
