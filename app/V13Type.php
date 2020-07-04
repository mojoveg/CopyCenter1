<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13Type extends Model
{
    protected $guarded = [];

    public function options()
    {
        return $this->hasMany('App\V13Option');
    }
}
