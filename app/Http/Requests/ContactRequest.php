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
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|min:5',
            'subject' => 'required|string|max:500',
            'notes' => 'required|string|max:3000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'   => 'الاسم مطلوب.',
            'name.string'     => 'الاسم يجب أن يكون نصاً.',
            'name.max'        => 'الاسم لا يجب أن يتجاوز 255 حرفاً.',

            'email.required'  => 'البريد الإلكتروني مطلوب.',
            'email.email'     => 'يرجى إدخال بريد إلكتروني صالح.',
            'email.max'       => 'البريد الإلكتروني لا يجب أن يتجاوز 255 حرفاً.',
            'email.min'       => 'البريد الإلكتروني يجب أن يكون 5 أحرف على الأقل.',

            'subject.required' => 'الموضوع مطلوب.',
            'subject.string'  => 'الموضوع يجب أن يكون نصاً.',
            'subject.max'     => 'الموضوع لا يجب أن يتجاوز 500 حرف.',

            'notes.required'  => 'الرسالة مطلوبة.',
            'notes.string'    => 'الرسالة يجب أن تكون نصاً.',
            'notes.max'       => 'الرسالة لا يجب أن تتجاوز 3000 حرف.',
        ];
    }
}
