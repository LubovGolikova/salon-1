<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLines extends Model
{
    public function sevices(){
        return $this->belongsTo('App\Service');
    }
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
