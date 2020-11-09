<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Membuat mengarah pada table countries
    protected $table = 'countries';

    public function Traveler()
    {
        return $this->belongsTo('App\Traveler');
    }

    public function Guide()
    {
        return $this->belongsTo('App\Guide');
    }

    public function Destination()
    {
        return $this->belongsTo('App\Destination');
    }
}
