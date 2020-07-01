<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOption extends Model
{
    protected $guarded = [];
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
