<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $id = $this->route('admin.customer.update');
        return [
            "name" => "required",
            "email" => "required|email:rfc,dns|unique:users,email," . $id . ",id",
            "customer_email" => "required|email:rfc,dns",
            "no_telp" => 'required|string|gt:0|regex:/^62\d+$/',
            "password" => "nullable|min:6"
        ];
    }
}
