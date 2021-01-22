<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:10',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'name.max' => ':attributeは:max文字以下で入力して下さい。',
            'name.min' => ':attributeは:min文字以上で入力して下さい。',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名前',
        ];
    }
}
