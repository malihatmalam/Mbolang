<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    // Membuat mengarah pada table articles
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'detail',
        'photo'
    ];

}
