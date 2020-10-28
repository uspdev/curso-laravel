<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\LivroRicardo;

class LivroRicardoRequest extends FormRequest
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
        //unique:<nome da tabela>,<nome do campo> (,<id do campo a ser ignorado>)
        $rules =  [
            'titulo'=> 'required',
            'autor' => 'required',
            'isbn'  => ['required','integer'],
            'tipo'  => ['required', Rule::in(LivroRicardo::tipos())],
            'preco' => 'nullable'
        ];
        if($this->method() == 'PATCH' || $this->method() == 'PUT'){ //modo de edição
            array_push($rules['isbn'], 'unique:livro_ricardos,isbn,'. $this->livros_ricardo->id);
        }else{
            array_push($rules['isbn'], 'unique:livro_ricardos,isbn');
        }

        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn), //peho apenas a parte inteira do isbn
        ]);
    }

    public function messages()
    {
        return [
            'titulo.required'=> 'O campo título é obrigatório.',
            'autor.required'=> 'O campo autor é obrigatório.',
            'tipo.required'=> 'O campo tipo é obrigatório.',
            'tipo.in'=> 'O tipo tem que ser ou nacional ou internacional.',
            'isbn.required'=> 'O campo ISBN é obrigatório.',
            'isbn.unique'=> 'Este ISBN já está cadastrado para outro livro.',
            'isbn.integer'=> 'O ISBN deve conter somente números.',
        ];
    }
}
