<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroLFloro extends Model
{
    use HasFactory;

    protected $table = 'livroslfloro';

    protected $guarded = ['id'];
}
