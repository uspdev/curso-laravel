<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\LivroLau;

class LivrolauRequest extends FormRequest
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
            'autor'  => 'nullable',
            'isbn'   => ['required','integer'],
            'tipo'   => ['required', Rule::in(LivroLau::tipos())],
            'preco'  => 'nullable'
        ];
        if ($this->method() == 'PATCH' || $this->method() == 'PUT'){
            array_push($rules['isbn'], 'unique:livro_laus,isbn,' .$this->livrolau->id);
        } else {
            array_push($rules['isbn'], 'unique:livro_laus,isbn,');
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'isbn.unique' => 'Este ISBN está cadastrado para outro livro',
            'isbn.required' => 'Campo ISBN obrigatório',
            'isbn.integer' => 'Campo ISBN deve ser inteiro',
            'titulo.required' => 'O TÍTULO é obrigatório',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
}
