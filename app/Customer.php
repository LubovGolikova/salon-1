<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function orderlines(){
        return $this->belongsTo('App\OrderLines');
    }
}
