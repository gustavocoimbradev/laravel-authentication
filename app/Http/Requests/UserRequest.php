<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6'
        ];
    }

    public function messages(): array {
        return [
            'name.required'         => 'The field \'name\' is required',
            'email.required'        => 'The field \'email\' is required',
            'email.email'           => 'The field \'email\' must contain a valid email',
            'email.unique'          => 'The \'email\' entered has already been registered',
            'password.required'     => 'The field \'password\' is required',
            'password.min'          => 'The password must contain 6 characters',
        ];  
    }
}
