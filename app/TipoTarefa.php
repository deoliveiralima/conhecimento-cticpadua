<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTarefa extends Model
{
    protected $fillable = ['nome'];

    public function registroTarefa()
    {
        return $this->hasMany('App\RegistroTarefa');

    }
}
