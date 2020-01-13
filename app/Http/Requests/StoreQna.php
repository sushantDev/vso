<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreQna extends FormRequest
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
            'question' => 'required',
            'answer'   => 'required'
        ];
    }

    public function data()
    {
        $data = [
            "question" => $this->input('question'),
            "answer"   => $this->input('answer'),
            "slug"     => Str::slug($this->input('question'))
        ];

        return $data;
    }
}
