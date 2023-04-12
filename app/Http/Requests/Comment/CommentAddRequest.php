<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseRequestApi;

class CommentAddRequest extends BaseRequestApi
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'text' => 'required|string|min:50|max:400',
            'rating' => 'required|integer|min:1|max:10',
            'comment_id' => 'nullable|exists:comments:id'
        ];
    }
}
