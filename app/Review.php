<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Membuat mengarah pada table reviews
    protected $table = 'reviews';

    protected $fillable = [
        'description'     
    ];
}
