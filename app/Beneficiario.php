<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{   
    protected $table = 'beneficiarios';

    public $fillable = ['id_beneficiario','nome_beneficiario'];
}
