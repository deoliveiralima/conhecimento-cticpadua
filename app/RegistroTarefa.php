<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroTarefa extends Model
{
    protected $fillable = ['tipo', 'descricao'];
    
    public function tipoTarefa(){
        return $this->belongsTo('App\TipoTarefa');
    }
}
 