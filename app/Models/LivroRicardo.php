<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroRicardo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//coloco os campos para não serem atribuídos em massa
}
