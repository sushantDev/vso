<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSession extends FormRequest
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
            'name'        => 'required',
            'course'      => 'required',
            'start'       => 'required|before:end_date',
            'end'         => 'required',
            'description' => ''
        ];
    }

    public function data()
    {
        $data = [
            'name'        => $this->input('name'),
            'course_id'   => $this->input('course'),
            'start'       => $this->input('start'),
            'end'         => $this->input('end'),
            'description' => $this->input('description')
        ];

        return $data;
    }
}
