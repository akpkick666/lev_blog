<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.prefecture' => 'required|integer',
            'post.city' => 'required',
            'post.date' => 'required|date',
            'post.gym' => 'required|string|max:100',
            'post.fee' => 'required|integer',
            'post.message' => 'required|string|max:100',
        ];
    }
    
    public function messages()
    {
        return [
            'post.prefecture.required' => '都道府県を選択してください。',
            'post.city.required' => '市区町村を選択してください。',
            'post.date.required' => '希望日を選択してください。',
            'post.gym.required' => '施設住所を入力してください。',
            'post.gym.max:100' => '100文字以内で入力してください。',
            'post.fee.required' => '施設使用料金を入力してください。',
            'post.message.required' => 'メッセージを入力してください。',
            'post.message.max:100' => '100文字以内で入力してください。',
        ];
    }
    
}
