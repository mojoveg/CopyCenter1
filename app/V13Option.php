<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13Option extends Model
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
    public function v13Type()
    {
        return $this->belongsTo('App\V13Type');
    }
}
