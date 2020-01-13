<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'message'  => 'required',
        ];
    }

    public function data()
    {
        $data = [
            'name'     => $this->input('name'),
            'email'    => $this->input('email'),
            'phone_no' => $this->input('phone_no'),
            'message'  => $this->input('message'),
        ];

        return $data;
    }
}
