<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class LivroSaotome extends Model
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
        // processar para visualizar
        return number_format($preco, 2, ',', '');
    }
    
    public function setPrecoAttribute($preco){
        // processar para gravar no db
        $this->attributes['preco'] = str_replace(',','.', $preco);
    }    
}
