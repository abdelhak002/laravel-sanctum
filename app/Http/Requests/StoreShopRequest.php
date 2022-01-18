<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'min:10', 'max:13'],
            'company_id' => ['required', 'string', 'min:6', 'max:6'],
            'password' => ['required', 'string', 'confirmed'],
        ];
    }
}
