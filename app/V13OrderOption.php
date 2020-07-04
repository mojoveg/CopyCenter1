<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13OrderOption extends Model
{
    protected $guarded = [];
    public function v13Order()
    {
        return $this->belongsTo('App\V13Order');
    }
}
