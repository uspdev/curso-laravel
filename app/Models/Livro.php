<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Livro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function tipos(){
        return [
            'Nacional',
            'Internacional'
        ];
    }

    public function getPrecoAttribute($preco){
        # 10.2 -> 10,20
        return number_format($preco, 2, ',','');
    }

    public function setPrecoAttribute($preco){
        $this->attributes['preco'] = str_replace(',','.',$preco);
    }
}
