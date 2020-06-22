<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{   
    protected $table = 'lancamentos';

    protected $fillable = ['lote_lancamento','data_lancamento','n_chamado_lancamento'];
}
