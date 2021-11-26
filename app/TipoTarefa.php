<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTarefa extends Model
{
    protected $fillable = ['nome'];

    public function RegistroTarefa()
    {
        return $this->hasMany('App\RegistroTarefa');

    }
}
