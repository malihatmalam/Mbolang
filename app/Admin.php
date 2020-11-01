<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // Membuat mengarah pada table admins
    protected $table = 'admins';

    protected $fillable = [
        'name'
    ];
}
