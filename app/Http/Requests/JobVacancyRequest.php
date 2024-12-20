<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobVacancyRequest extends FormRequest
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
            "title" => ["required", "max:100"],
            "description" => ["required"],
            "type" => ["required", "in:full_time,part_time,intern"],
            "position" => ["required", "numeric"],
            "responsibility" => ["required"],
            "qualification" => ["required"],
            "created" => ["required", "date_format:d-m-Y H:i:s"],
            "expired" => ["required", "date_format:d-m-Y H:i:s"],
            "department_id" => ["required", "exists:departments,id"]
        ];
    }
}
