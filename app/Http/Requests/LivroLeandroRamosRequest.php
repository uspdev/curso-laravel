<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroLeandroRamosRequest extends FormRequest
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

        if($this->method() == 'PATCH' || $this->method() == 'PUT'){
            array_push($rules['isbn'], 'unique:livros_leandroramos,isbn,' . $this->livro->id);
        }

        else{
            array_push($rules['isbn'], 'unique:livros_leandroramos,isbn');
        }

        return $rules;
    }
    
    public function messages(){
        return[
            'isbn.required'=> 'O ISBN não pode ficar em branco.',
            'titulo.required'=> 'O título não pode ficar em branco.',
            'isbn.unique'=> 'Este ISBN já está cadastrado para outro livro.',
            'isbn.integer'=> 'O ISBN deve conter somente números.',
            
        ];
    }
    
    protected function prepareForValidation(){
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }
}
