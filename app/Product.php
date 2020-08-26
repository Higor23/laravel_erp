<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'number',
        'price', 'cost',
        'measure_id',
        'barCod',
        'note',

    ];

    public function measure()
    {
        return $this->belongsTo(Measure::class);

    }

    
}
