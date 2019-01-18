<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaFotos extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_imagen';

    public function scopeSearch($foto){

        return empty(request()->search) ? $foto : $foto->where('descripcion_imagen', 'like', '%'.request()->search.'%');
    }
}
