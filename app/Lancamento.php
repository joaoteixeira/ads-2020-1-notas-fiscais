<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{   
    protected $table = 'lancamentos';

    public function beneficiario(){

        return $this->belongsTo('App\Beneficiario');
    }

    
}
