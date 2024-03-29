<?php


namespace App\Services;


use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store(array $data)
    {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['image_preview'])) {
                $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
            }
            if (isset($data['image_main'])) {
            $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);
            }

            $post = Post::firstOrCreate($data);

            if (isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }

            DB::commit();
            return true;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update(array $data, Post $post)
    {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['image_preview'])) {
                $data['image_preview'] = Storage::disk('public')->put('images/post_preview', $data['image_preview']);
            }
            if (isset($data['image_main'])) {
                $data['image_main'] = Storage::disk('public')->put('images/post_main', $data['image_main']);
            }

            $post->update($data);

            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }

            DB::commit();
            return $post;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }
}
