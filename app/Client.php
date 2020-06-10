<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'Nome', 'Telefone_01', 'Telefone_02',
        'Email', 'CPF', 'CEP', 'Logradouro',
        'Número', 'Bairro', 'Complemento',
        'Município', 'Estado'
    ];
}
