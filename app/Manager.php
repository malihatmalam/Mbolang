<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // Membuat mengarah pada table managers
    protected $table = 'managers';

    protected $fillable = [
        'name',
        'address',
        'phone'     
    ];
}
