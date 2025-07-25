<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'     =>'required|email|regex:/^[\w\.\-]+@gmail\.com$/i|unique:users,email,',  
            'password'  =>'required|min:7|confirmed', // cần đặt đúng name input : password_confirmation để laravel có thể kieemr  tra
            'fullname'  =>'required', 
            'tel'       =>'required|max:10',
            'address'   =>'required',
            'birthday'      =>'required',
        ];
    }
}
