<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    // Membuat mengarah pada table styles
    protected $table = 'styles';

    protected $fillable = [
        'name',
        'description'     
    ];
}
