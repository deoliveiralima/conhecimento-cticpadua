<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroTarefa extends Model
{
    protected $fillable = ['tipo', 'descricao'];
    
    public function tipotarefas(){
        return $this->belongsTo('App\TipoTarefa');
    }
}
 