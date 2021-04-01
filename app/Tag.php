<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Post');//STIAMO DICENDO OGNI SINGOLO POST APPARTIENE A TANTI TAG
    }
}
