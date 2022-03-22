<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_preview' => 'nullable|file|image',
            'image_main' => 'nullable|file|image',
            'category_id' => 'required|exists:categories,id|numeric',
            'tag_ids' => 'nullable|array',
            'tag_id.*' => 'nullable|exists:tags,id|numeric',
        ];
    }
}
