<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{   
    protected $table = 'usuarios';

    public $fillable = ['nome'];

    public $timestamps = false;
}
