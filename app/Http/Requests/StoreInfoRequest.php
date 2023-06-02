<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'hoten' => ['required'],
            'gioitinh' => ['required'],
            'ngaysinh' => ['required'],
            'noisinh' => ['required'],
            'dantoc' => ['required'],
            'cccd' => ['required'],
            'email' => ['required'],
            'sdt' => ['required'],
            'diachi' => ['required']
        ];
    }
}
