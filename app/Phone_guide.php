<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone_guide extends Model
{
    // Membuat mengarah pada table phone_guides
    protected $table = 'phone_guides';

    protected $fillable = [
        'phone'    
    ];
}
