<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'rsocial', 'fantasia', 'cpfcnpj', 'telefone1', 'telefone2',
        'Email', 'ramo_id', 'outro', 'indestadual','iestadual', 'imunicipal',
        'cep', 'logradouro', 'numero', 'bairro', 'complemento',
        'municipio', 'estado',

    ];
}
