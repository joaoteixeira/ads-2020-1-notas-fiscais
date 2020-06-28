<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model

{   

    public $timestamps = false;

    protected $table = 'beneficiarios';

    public $fillable = ['nome_beneficiario', 'cart_beneficiario'];

    public function lancamentos() 

    {
        return $this->hasMany('App\Lancamento');
    }


}
