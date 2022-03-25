<?php


namespace App\Services;


use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CommentService
{
    public function update(array $data, Comment $comment)
    {
        try {
            DB::beginTransaction();

            $comment->update($data);

            DB::commit();
            return $comment;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }
}
