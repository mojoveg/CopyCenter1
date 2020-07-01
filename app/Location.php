<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];

    public function option()
    {
        return $this->belongsToMany('App\Option', 'location_options');
    }
}
