<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ActiveEnum;
use Illuminate\Validation\Rule;

class BalanceRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'add_balance' => 'nullable|numeric',
            'used_balance' => 'nullable|numeric',
            'remain_balance' => 'nullable|numeric',
            'balance' => 'required|numeric',
            'active' => [
                'nullable',
                Rule::in(array_column(ActiveEnum::cases(), 'value')),
            ],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'اسم المستخدم مطلوب',
            'user_id.exists' => 'اسم المستخدم غير موجود',
            'balance.required' => 'الرصيد مطلوب',
            'balance.numeric' => 'يجب أن يكون الرصيد رقماً',
            'add_balance.numeric' => 'يجب أن يكون أضافة الرصيد رقماً',
            'used_balance.numeric' => 'يجب أن يكون الرصيد المستخدم رقماً',
            'remain_balance.numeric' => 'يجب أن يكون  الرصيد المتبقى رقماً',
        ];
    }
}