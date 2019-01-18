<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoPiezas extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_pieza';

    public function scopeSearch($pieza){

        return empty(request()->search) ? $pieza : $pieza->where('nombre_pieza', 'like', '%'.request()->search.'%');
    }
}
