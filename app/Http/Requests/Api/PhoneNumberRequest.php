<?php

namespace App\Http\Requests\Api;

class PhoneNumberRequest extends FormRequest
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
            'contact_id' => 'required|exists:contact,id',
            'number' => 'required',
        ];
    }

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    public function validationData()
    {
        $input = [
            'contact_id' => cleanup($this->input('contact_id')),
            'number' => cleanup($this->input('number')),
            'label' => cleanup($this->input('label')),
        ];

        return $input;
    }

}
