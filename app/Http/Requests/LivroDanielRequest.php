<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LivroDanielRequest extends FormRequest
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
            'isbn' => ['required', 'integer'], 
            'tipo'   => ['required', Rule::in(\App\Models\Livro::tipos())], 
            'preco' => 'nullable'
        ];
        /**
         * Como o isbn deve ser único, podemos inserir essa validação. Porém, 
         * se trata-se do update, o isbn deve ser único, mas deve excluir
         * da condição seu próprio isbn. Por isso é necessário incluir a 
         * validação unique, com excessão no caso do update. 
         */
        if ($this->method() == 'PATCH' || $this->method() == 'PUT') {
            array_push($rules['isbn'], 'unique:livro_daniels,isbn,' . $this->livros_daniel->id);
        } else {
            array_push($rules['isbn'], 'unique:livro_daniels');
        }
        return $rules;
    }

    /**
     * Prepara os campos antes da validação. 
     * Neste caso, como o isbn pode ser escrito com pontos e traços, faz a 
     * removção destes antes de realizar a validação em rules
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }

    /**
     * O método messages() permite customizar a mensagem dependendo do erro 
     * de validação
     */
    public function messages()
    {
        return [
            'isbn.unique' => 'Este ISBN está cadastrado para outro livro',
            'isbn.integer' => 'O campo ISBN pode contar apenas números',
            'titulo.required' => 'Por favor, insira um título para o livro',
            'autor.required' => 'Por favor, insira um autor para o livro',
            'isbn.required' => 'Por favor, insira um isbn para o livro',
            
        ];
    }

}
