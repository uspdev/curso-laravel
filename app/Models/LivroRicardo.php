<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroRicardo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];//coloco os campos para não serem atribuídos em massa

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
        return number_format($preco, 2, ',', '');
    }

    public function setPrecoAttribute($preco){
        $this->attributes['preco']  = str_replace(',', '.',$preco);
    }
}
