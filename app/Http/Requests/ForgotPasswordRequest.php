<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ForgotPasswordRequest extends FormRequest
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
     *
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
        ];
    }
    public function messages(): array
    {
        return [
            'email.exists' => 'Email này tôn tồn tại.',
            'email.required' => 'Hãy cung cấp email .',
            'email.email' => 'Email không đúng đinh dạng.'
        ];
    }
}
