<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class LivroLau extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function tipos(){
        return [
            'Livro',
            'Panfleto',
            'Tese',
            'Periódico',
            'Artigo de Periódico',
            'Manuscrito',
            'Iconográfico',
            'Audiovisual',
            'Música (Som)',
            'Partitura'
        ];
    }

    public function setPrecoAttribute($preco){
        $this->attributes['preco'] = str_replace(',','.',$preco);
    }
    
    public function getPrecoAttribute($preco){
        return number_format($preco, 2, ',', '');
    }
}
