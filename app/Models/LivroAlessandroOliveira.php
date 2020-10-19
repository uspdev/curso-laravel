<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroAlessandroOliveira extends Model
{
    use HasFactory;
    protected $table = 'livros_alessandrooliveira';
    protected $guarded = ['id'];
}
