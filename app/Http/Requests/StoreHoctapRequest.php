<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHoctapRequest extends FormRequest
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

            'tinh_10_hk1'  => ['required'],
            'tinh_10_hk2'  => ['required'],
            'tinh_11_hk1'  => ['required'],
            'tinh_11_hk2'  => ['required'],
            'tinh_12_hk1'  => ['required'],
            'tinh_12_hk2'  => ['required'],
            'huyen_10_hk1'  => ['required'],
            'huyen_10_hk2'  => ['required'],
            'huyen_11_hk1'  => ['required'],
            'huyen_11_hk2'  => ['required'],
            'huyen_12_hk1'  => ['required'],
            'huyen_12_hk2'  => ['required'],
            'thpt_10_hk1'  => ['required'],
            'thpt_10_hk2'  => ['required'],
            'thpt_11_hk1'  => ['required'],
            'thpt_11_hk2'  => ['required'],
            'thpt_12_hk1'  => ['required'],
            'thpt_12_hk2'  => ['required'],
            'namtotnghiep'  => ['required'],
            'dtuutien'  => ['required'],
            'khuvucts'  => ['required']
        ];
    }
}
