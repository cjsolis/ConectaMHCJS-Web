<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_documento';

    public function scopeSearch($documento){

        return empty(request()->search) ? $documento : $documento->where('nombre_documento', 'like', '%'.request()->search.'%');
    }
}
