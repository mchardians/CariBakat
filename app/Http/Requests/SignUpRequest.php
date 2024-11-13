<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            "fullname" => ["required"],
            "email" => ["required", "email", "unique:users,email"],
            "phone" => ["required", "starts_with:08,62", "digits_between:10,13", "unique:users,phone"],
            "password" => ["required", "confirmed", "min:6"]
        ];
    }
}
