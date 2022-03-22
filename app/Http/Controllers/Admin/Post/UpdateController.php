<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
       try {
           $data = $request->validated();

           $tagIds = $data['tag_ids'];
           unset($data['tag_ids']);

           $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
           $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);

           $post = $post->update($data);
           $post->tags()->sync($tagIds);
       } catch (\Exception $exception) {
           abort('404');
       }

        return redirect()->route('admin.post.index');
    }
}
