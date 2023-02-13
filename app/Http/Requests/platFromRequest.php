<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class platFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'plat_name'=>[
                'required',
                'max:255'
            ],
            'plat_descreption'=>[
                'required',
            ]
        ];
    }
}
