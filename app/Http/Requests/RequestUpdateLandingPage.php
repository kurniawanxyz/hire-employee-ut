<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateLandingPage extends FormRequest
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
        'hero_section_image_1' => ['image'],
        'hero_section_image_2' => ['image'],
        'hero_section_image_3' => ['image'],
        'manpower_channelled' => ['integer',"min:0"],
        'client' => ['integer',"min:0"],
        'youtube' => ['nullable', 'string'],
        'instagram' => ['nullable', 'string'],
        'facebook' => ['nullable', 'string'],
        'tiktok' => ['nullable', 'string'],
        'twitter' => ['nullable', 'string'],
        'operational_start_day' => ['string', 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday'],
        'operational_end_day' => ['string', 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday'],
        'operational_start_time' => ['string'],
        'operational_end_time' => ['string'],
        ];
    }
}
