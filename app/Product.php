<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'descricao', 'quantidade',
        'preco', 'custo',
        'unidadeMedida_id',
        'codBarras',
        'obs',
        'unidadeMedida'

    ];
}
