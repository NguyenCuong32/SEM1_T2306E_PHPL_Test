<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePage extends FormRequest
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
            "Producttype"=> "require|string|max:3",
            "Productcode"=> "require|string|max:6",
            "Productname"=> "max:50",
            "Quantity"=> "interger",
        ];
    }
    public function messages(): array
    {
        return [
            "Producttype.require"=> "nhap tong tin",
            "Producttype.string"=> "la chuoi",
            "Producttype.max"=> "khong qua :max",
            "Productcode.require"=> "nhap thong tin",
            "Productcode.string"=> "la chuoi",
            "Productcode.max"=> "khong qua :max",
            "Productname.max"=> "khong qua :max",
            "Quantity.interger"=> "chi nhap so",
        ];
    }
}
