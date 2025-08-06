<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|email|regex:/^[\w\.\-]+@gmail\.com$/i|unique:users,email',
            'password' => 'required|min:7',
            'full_name' => 'required',
            'phone' => 'required|digits:10',
            'address' => 'required',
            'birthday' => 'required',
            'role' => 'required|exists:roles,id',


        ];
    }
}
