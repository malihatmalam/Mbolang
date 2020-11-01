<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo_destination extends Model
{
    // Membuat mengarah pada table photo_destinations
    protected $table = 'photo_destinations';

    protected $fillable = [
        'photo'     
    ];
}
