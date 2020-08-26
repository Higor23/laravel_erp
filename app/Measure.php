<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{   
    protected $table = 'measures';

    protected $fillable = [
        'name', 'id',
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    
}
