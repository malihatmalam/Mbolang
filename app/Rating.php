<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // Membuat mengarah pada table ratings
    protected $table = 'ratings';

    protected $fillable = [
        'value'    
    ];
}
