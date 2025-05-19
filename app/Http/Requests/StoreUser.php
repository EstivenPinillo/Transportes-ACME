<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'profile_id' => ['required'],
            'city_id' => ['required'],
            'type_document_id' => ['required'],
            'first_name' => ['required'],
            'second_name' => ['nullable'],
            'last_name' => ['required'],
            'document' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'profile_id' => 'profile_id required',
            'city_id' => 'city_id required',
            'type_document_id' => 'type_document_id required',
            'first_name' => 'first_name required',
            'last_name' => 'last_name required',
            'document' => 'document required',
            'address' => 'address required',
            'phone_number' => 'phone_number required',
            'email.required' => 'A email is required',
            'email.email' => 'A email type email',
            'password.required' => 'A password is required',
            
        ];
    }
}
