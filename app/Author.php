<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function detail(){
        return $this->hasOne('App\UserDetail'); //stiamo definendo la relazione(one to one) tra i modelli
    }

    public function post(){
        return $this->hasMany('App\Post');
    }
}
/**
 * se ho capito bene è qui che noi colleghiamole due tabelle e creamo le relazioni..... NEI MODEL!!
 * a ogni tabella corrisponde un MODEL in questo caso il model Author corrisponde alla tabella create_ authors_table.
 * mentre il model UseDetails corrisponde alla tabella creata_user_details_table.
 */
