<?php

namespace App\Http\Requests;

use Database\Factories\LivroFernandoFactory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\LivroFernando;

class LivroFernandoRequest extends FormRequest
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
            'autor' => 'required',
            'isbn' => ['required','integer'],
            'tipo' => ['required', Rule::in(LivroFernando::tipos())],
            'preco' => 'nullable'
        ];

        //se for create verifica unique isbn
        if ($this->method() == 'PATCH' || $this->method() == 'PUT') {
            array_push($rules['isbn'], 'unique:livros_fernando,isbn,' . $this->livros_fernando->id);
        //se for update não verifica unique isbn
        } else {
            array_push($rules['isbn'], 'unique:livros_fernando,isbn');
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
            'isbn.unique' => 'Este isbn está cadastrado para outro livro',
        ];
    }
}
