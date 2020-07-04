<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13Order extends Model
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
    public function v13OrderOptions()
    {
        return $this->hasMany('App\V13orderOption');
    }

    public function path()
    {
        return route('v13orders.show');
    }
}
