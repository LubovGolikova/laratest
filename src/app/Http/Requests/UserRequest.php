<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'require|min:2|max:255',
            'avatar' => ['required','mimes:jpeg,bmp,png'],
            'email' => 'required|email',
            'password'=>'required|string|min:8'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'The username is Required.',
            'avatar.required'  => 'The avatar is Required.',
            'email.required' => 'The email is Required',
            'password.required'  => 'The password is Required.'
        ];
    }
}
