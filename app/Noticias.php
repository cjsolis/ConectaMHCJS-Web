<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_noticia';

    public function scopeSearch($noticia){

        return empty(request()->search) ? $noticia : $noticia->where('titulo_noticia', 'like', '%'.request()->search.'%');
    }
}
