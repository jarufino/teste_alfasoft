<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $contactId = $this->route('contact');
        return [
            'name' => 'required|min:6',
            'contact' => 'required|min:9',
            'email' => 'required|email|unique:contacts,email,'.($contactId ? $contactId->id : null)
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name Required',
            'name.min' => 'Necessary :min caracters',
            'contact.required' => 'Contact Required',
            'contact.min' => 'Necessary :min caracters',
            'email.required' => 'Email Required',
            'email.email' => 'The email must be validated',
            'email.unique' => 'This email already exists',
        ];
    }
}
