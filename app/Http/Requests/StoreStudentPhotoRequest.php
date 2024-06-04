<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Orkhanahmadov\ZipValidator\Rules\ZipContent;

class StoreStudentPhotoRequest extends FormRequest
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
            'archive' => ['required','file','mimes:zip', new ZipContent('*.jpg')]
        ];
    }
}
