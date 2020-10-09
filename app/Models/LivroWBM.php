<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroWBM extends Model
{
    use HasFactory;

    protected $table = 'livroswbm';
    protected $fillable = [
    'titulo',
    'autor',
    'isbn',
    ];
}
