<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreUpdateLivro extends FormRequest
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
            'titulo' => 'required | max:100 | min:2',
            'autor'  => 'required | max:50  | min:5',
            'ano'    => 'required | integer'
        ];
    }
}
