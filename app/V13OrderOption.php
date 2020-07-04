<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13OrderOption extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\V13Order');
    }
}
