<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElemQr extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_elemqr';

    public function scopeSearch($elem){

        return empty(request()->search) ? $elem : $elem->where('nombre_elemqr', 'like', '%'.request()->search.'%');
    }
}
