<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Requests\Profile\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();

        $this->service->update($data, $comment);

        return redirect()->route('profile.comment.index');
    }
}
