<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 認証を行う場合は、trueを返す
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
            // inputのname属性とバリデーションルールを指定
            'name' => 'required|string',
            'age' => 'integer|min:0|max:150',
            'nationality' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'age.integer' => '数値を入力してください',
            'age.min' => '0以上の数値を入力してください',
            'age.max' => '150以下の数値を入力してください',
            'nationality.required' => '国籍を入力してください',
        ];
    }

    protected function getRedirectUrl()
    {
        return 'verror';
    }
}
