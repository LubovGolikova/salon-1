<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLines extends Model
{
    public function service(){
        return $this->belongsTo('App\Service', 'services_id');
    }
    public function customer(){
        return $this->belongsTo('App\Customer', 'customers_id');
    }
}
