<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo_review extends Model
{
    // Membuat mengarah pada table photo_reviews
    protected $table = 'photo_reviews';

    protected $fillable = [
        'photo'     
    ];
}
