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
            'age' => "nullable|integer",
            'height' => "nullable|integer",
            'weight' => "nullable|integer",
            'role' => "required|in:mechanic,operator",
            'nis' => 'required',
            'email' => 'required|email:rfc,dns',
            'school_origin' => 'required',
            'place_birth' => 'required',
            'date_birth' => 'required',
            'major' => 'required',
            'batch' => 'required|integer',
            'ojt_location' => 'required',
            'avg_practice' => 'nullable|integer',
            'avg_theory' => 'nullable|integer',
            'exp_ojt_ps' => 'nullable|integer',
            'exp_ojt_ri' => 'nullable|integer',
            'exp_ojt_ts' => 'nullable|integer',
            'us_rank_1' => 'nullable',
            'us_rank_2' => 'nullable',
            'us_rank_3' => 'nullable',
            'us_rank_4' => 'nullable'
        ];
    }
}
