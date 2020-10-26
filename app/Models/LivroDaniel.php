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
    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
    
}
