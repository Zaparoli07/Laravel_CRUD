<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{

    protected $fillable = [
        'nome', 
        'email', 
        'facebook',
        'linkedin',
        'telefone_celular',
        'telefone_comercial',
        'telefone_residencial',
    ];
}
