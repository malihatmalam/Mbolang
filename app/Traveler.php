<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    // Membuat mengarah pada table travelers
    protected $table = 'travelers';

    protected $fillable = [
        'name',
        'birt',
        'gender',
        'address',
        'country',
        'bio'     
    ];

    public function Country()
    {
        return $this->hasOne('App\Country');
    }

}
