<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroTapia extends Model
{
    use HasFactory;
    // Necessário para quando não seguir o padrão de nomeação, ou seja,
    // nome da tabela não estiver no plural.
    //protected $table = "nome_da_tabela";
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}