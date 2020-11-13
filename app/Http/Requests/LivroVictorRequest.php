<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LivroVictorRequest extends FormRequest
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
    

    public function rules(){
        $rules = [
            'titulo' => 'required',
            'autor'  => 'required',
            'isbn' => ['required','integer'],
            'tipo' => ['required', Rule::in(\App\Models\LivroVictor::tipos())],
            'preco' => 'nullable',
        ];
        if ($this->method() == 'PATCH' || $this->method() == 'PUT'){
            array_push($rules['isbn'], 'unique:livros,isbn,' .$this->livrosvictor->id);
        }
        else{
            array_push($rules['isbn'], 'unique:livros');
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
