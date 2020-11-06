<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroWillEERequest extends FormRequest
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
            'titulo'    =>  'required',
            'autor'    =>  'required',
            'isbn'    =>  'required | integer',
        ];
    }
    public function messages()
    {
        return [
            'isbn.required' => 'Este ISBN é um campo necessário',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' =>preg_replace('/[⁰-9]/','',$this->isbn),
        ]);
    }
}
