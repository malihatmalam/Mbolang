<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    // Membuat mengarah pada table guides
    protected $table = 'guides';

    protected $fillable = [
        'name',
        'birt',
        'gender',
        'status',
        'address',
        'country',
        'description'     
    ];
}
