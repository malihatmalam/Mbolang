<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // Membuat mengarah pada table favorites
    protected $table = 'favorites';
}
