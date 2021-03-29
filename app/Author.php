<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function detail(){
        return $this->hasOne('App\UserDetail'); //stiamo definendo la relazione(one to one) tra i modelli
    }
}
