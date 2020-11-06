<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroDaniel extends Model
{
    use HasFactory;
    // Atributo $guarded protege os campos que não devem ser inseridos
    // em uma inserção em massa
    protected $guarded = ['id'];

    // Relacionamento FK com tabela User
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    // Retorna os tipos de livros aceitos 
    public static function tipos()
    {
        return [
            'Nacional',
            'Internacional'
        ];
    }

    // mutators --> Faz o tratamento do valor ao inserir ou recuperar do BD
    public function setPrecoAttribute($value)
    {
        $this->attributes['preco'] = str_replace(',', '.', $value);
    }

    public function getPrecoAttribute($value)
    {
        return number_format($value, 2, ',', '');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y H:i');
    }
}
