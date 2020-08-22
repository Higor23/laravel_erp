<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'number',
        'price', 'cost',
        'measure_id',
        'barCod',
        'note',

    ];

    public function measure() {
        return $this->hasOne(Measure::class); 

    }

    public function measures(){
        return $this->belongsTo(Product::class);
    }

    
}
