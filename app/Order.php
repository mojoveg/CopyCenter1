<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    // public function customer()
    // {
    //     return $this->belongsTo('App\Customer');
    // }
    // public function option()
    // {
    //     return $this->hasMany('App\option');
    // }
    public function orderOptions()
    {
        return $this->hasMany('App\orderOption');
    }

    public function path()
    {
        return route('orders.show');
    }

}
