<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = [];

    // public function location()
    // {
    //     return $this->belongsToMany('App\Location', 'location_options');
    // }
    // public function order()
    // {
    //     return $this->belongsToMany('App\order', 'order_options');
    // }
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
