<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHiredStudentRequest extends FormRequest
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
            'photo' => "image|max:2048",
            'name' => "required",
            'age' => "required|integer",
            'height' => "required|integer",
            'weight' => "required|integer",
            'experience' => "required",
            'role' => "required|in:mechanic,operator"
        ];
    }
}
