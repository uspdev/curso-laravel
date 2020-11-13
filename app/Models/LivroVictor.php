<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroVictor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }

    public static function tipos(){
        return [
            'Nacional',
            'Internacional'
        ];
    }

    public function setPrecoAttribute($value){
        $this->attributes['preco'] = str_replace(',','.',$value);
    }
    
    public function getPrecoAttribute($value){
        return number_format($value, 2, ',', '');
    }
}
