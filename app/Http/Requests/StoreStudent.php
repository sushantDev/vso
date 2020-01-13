<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'name'     => 'required',
            'email'    => 'required',
            'phone_no' => 'required',
        ];
    }

    public function data($center)
    {
        $data = [
            'name'     => $this->input('name'),
            'email'    => $this->input('email'),
            'phone_no' => $this->input('phone_no'),
            'center_id' => $center->id
        ];

        return $data;
    }
}
