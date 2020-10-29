<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class LivroLFloro extends Model
{
    use HasFactory;

    protected $table = 'livroslfloro';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function tipos()
    {
        return [
          'Nacional',
          'Internacional',
        ];
    }

    public function getPrecoAttribute($preco)
    {
        return "R$ " . number_format($preco, 2, ',', '');
    }

    public function setPrecoAttribute($preco)
    {
        $this->attributes['preco'] = str_replace('R$ ', '', (str_replace(',', '.', $preco)));
    }

    public function getIsbnAttribute($isbn)
    {
        //Exemplo baseado no link https://pt.stackoverflow.com/questions/25651/tem-como-colocar-mascara-em-php-dinamicamente
        $isbn_mask = "%s%s%s-%s%s-%s%s%s-%s%s%s%s-%s";
        return vsprintf($isbn_mask, str_split($isbn));
    }
}
