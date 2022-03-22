<?php


namespace App\Services;


use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $data)
    {
        try {
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
            $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);

            return true;
        } catch (\Exception $exception) {
            abort(404);
        }
    }

    public function update(array $data, Post $post)
    {
        try {
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
            $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);

            $post->update($data);
            $post->tags()->sync($tagIds);

            return $post;
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
