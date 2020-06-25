<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model

{   

    public $timestamps = false;

    protected $table = 'fornecedores';

    public $fillable = ['fornecedor', 'cnpj'];
}
