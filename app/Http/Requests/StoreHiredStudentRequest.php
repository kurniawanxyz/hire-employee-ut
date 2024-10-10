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
            'date_birth' => 'required|date',
            'major' => 'required',
            'batch' => 'required|integer',
            'ojt_location' => 'required',
            'avg_practice' => 'required|integer',
            'avg_theory' => 'required|integer',
            'exp_ojt_ps' => 'required|integer',
            'exp_ojt_ri' => 'required|integer',
            'exp_ojt_ts' => 'required|integer',

            'ps_scania' => 'nullable|integer',
            'ri_scania' => 'nullable|integer',
            'ts_scania' => 'nullable|integer',
            'unit_scania' => 'nullable|integer',
            'ps_ud' => 'nullable|integer',
            'ri_ud' => 'nullable|integer',
            'ts_ud' => 'nullable|integer',
            'unit_ud' => 'nullable|integer',
            'ps_hd' => 'nullable|integer',
            'ri_hd' => 'nullable|integer',
            'ts_hd' => 'nullable|integer',
            'unit_hd' => 'nullable|integer',
            'ps_pc_small' => 'nullable|integer',
            'ri_pc_small' => 'nullable|integer',
            'ts_pc_small' => 'nullable|integer',
            'unit_pc_small' => 'nullable|integer',
            'ps_pc_big' => 'nullable|integer',
            'ri_pc_big' => 'nullable|integer',
            'ts_pc_big' => 'nullable|integer',
            'unit_pc_big' => 'nullable|integer',
            'ps_sbd' => 'nullable|integer',
            'ri_sbd' => 'nullable|integer',
            'ts_sbd' => 'nullable|integer',
            'unit_sbd' => 'nullable|integer',
            'ps_grader' => 'nullable|integer',
            'ri_grader' => 'nullable|integer',
            'ts_grader' => 'nullable|integer',
            'unit_grader' => 'nullable|integer',
            'ps_bulldozer_small' => 'nullable|integer',
            'ri_bulldozer_small' => 'nullable|integer',
            'ts_bulldozer_small' => 'nullable|integer',
            'unit_bulldozer_small' => 'nullable|integer',
            'ps_bulldozer_big' => 'nullable|integer',
            'ri_bulldozer_big' => 'nullable|integer',
            'ts_bulldozer_big' => 'nullable|integer',
            'unit_bulldozer_big' => 'nullable|integer',
            'ps_bomag' => 'nullable|integer',
            'ri_bomag' => 'nullable|integer',
            'ts_bomag' => 'nullable|integer',
            'unit_bomag' => 'nullable|integer',
            'ps_tadano' => 'nullable|integer',
            'ri_tadano' => 'nullable|integer',
            'ts_tadano' => 'nullable|integer',
            'unit_tadano' => 'nullable|integer',
            'ps_wheel_loader' => 'nullable|integer',
            'ri_wheel_loader' => 'nullable|integer',
            'ts_wheel_loader' => 'nullable|integer',
            'unit_wheel_loader' => 'nullable|integer',

            'integritas' => 'nullable|integer',
            'santun' => 'nullable|integer',
            'ahli' => 'nullable|integer',
            'berani' => 'nullable|integer',

            'presentation_title_ps' => 'nullable|string',
            'presentation_title_ts' => 'nullable|string',
            'presentation_ps_score' => 'nullable|integer',
            'presentation_ts_score' => 'nullable|integer',
        ];
    }
}
