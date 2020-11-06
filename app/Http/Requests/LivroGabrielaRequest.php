<?php

namespace App\Http\Requests;

use App\Models\LivroGabriela;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LivroGabrielaRequest extends FormRequest
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
            'tipo' => ['required', Rule::in(LivroGabriela::tipos())],
            'preco' => 'nullable'
        ];

        if($this->method() == 'PATCH' || $this->method() == 'PUT'){
            //atualização
            array_push($rules['isbn'], 'unique:livro_gabrielas,isbn,' . $this->livrogabriela->id);
        } else {
            //criação
            array_push($rules['isbn'], 'unique:livro_gabrielas,isbn');
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'isbn.required' => 'O campo isbn deve ser preenchido',
            'titulo.required' => 'O campo titulo deve ser preenchido',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
}
