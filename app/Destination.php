<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    // Membuat mengarah pada table destinations
    protected $table = 'destinations';
    
    protected $fillable = [
        'name',
        'time',
        'ticket',
        'description',
        'address',
        'city',
        'province',
        'latitude',
        'longitude'     
    ];
}
