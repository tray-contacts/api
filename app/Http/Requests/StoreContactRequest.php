<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:contacts|max:255',
            'socials.facebook' => 'unique:socials|max:255',
            'socials.linkedin' => 'unique:socials|max:255',
            'telephone.phone_number' => 'unique:telephones|max:255',
            'telephone.phone_type_id' => 'max:255',
        ];
    }
}
