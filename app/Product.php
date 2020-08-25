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

    // public function measures() {
    //     return $this->hasOne(Measure::class); 

    // }

    public function measures()
    {
        return $this->belongsTo(Measure::class);
        // $measures = Measure::all();
    }

    
}
