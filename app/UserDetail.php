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
/**
 * se ho capito bene è qui che noi colleghiamole due tabelle e creamo le relazioni..... NEI MODEL!!
 *  * se ho capito bene è qui che noi colleghiamole due tabelle e creamo le relazioni..... NEI MODEL!!
 * a ogni tabella corrisponde un MODEL in questo caso il model Author corrisponde alla tabella create_ authors_table.
 * mentre il model UseDetails corrisponde alla tabella creata_user_details_table.

 */
