<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends \Eloquent
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
}
