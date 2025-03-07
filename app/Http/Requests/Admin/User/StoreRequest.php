<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:user',
            'password' => 'required|string',
            'role' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле небходимо для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поле нкобходимо для заполнения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Ползователь с таким email уже существует',


        ];
    }
}
