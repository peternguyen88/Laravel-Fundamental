<?php

namespace App;

class Tag extends \Eloquent
{
    /**
     * Get the articles associated with the given tag
     */
    public function articles(){
        $this->belongsToMany('App\Article');
    }
}
