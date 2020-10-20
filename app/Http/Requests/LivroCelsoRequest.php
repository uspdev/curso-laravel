<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroCelsoRequest extends FormRequest
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
        $rules = [
            'titulo' => 'required',
            'autor' => 'nullable',
            'isbn' => ['required', 'integer'],
        ];

        if($this->method() == 'PATCH' || $this->method() == 'PUT') {
            array_push($rules['isbn'], 'unique:livro_celsos,isbn,' . $this->livro_celso->id);
        } else {
            array_push($rules['isbn'], 'unique:livro_celsos,isbn');
        }

        return $rules;
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
    public function messages()
    {
        return [
            'titulo.required' => 'Campo "Título" é obrigatório',
            'isbn.required' => 'Campo "ISBN" é obrigatório',
            'isbn.integer' => 'Campo "ISBN" deve receber um inteiro',
            'isbn.unique' => 'Este ISBN está cadastrado para outro livro',
        ];
    }
}
