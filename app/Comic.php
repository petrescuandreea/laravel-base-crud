<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillabel = [

        'title',
        'author',
        'release_date',
        'pages'
    ];
}
