<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCenter extends FormRequest
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
            'name'    => 'required',
            'address' => 'required',
            'phone'   => 'required',
            'user'    => 'required'
        ];
    }

    public function data()
    {
        $data = [
            'name'    => $this->input('name'),
            'address' => $this->input('address'),
            'phone'   => $this->input('phone'),
            'user_id' => $this->input('user')
        ];

        return $data;
    }
}
