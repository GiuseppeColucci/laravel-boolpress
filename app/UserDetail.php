<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function author(){
        return $this->belongsTo('App\Author');//stimao scrivendo la rotta
        //stimo definendo una rotta (one to one)
    }
}
