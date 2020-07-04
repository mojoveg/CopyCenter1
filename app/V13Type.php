<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V13Type extends Model
{
    protected $guarded = [];

    public function v13Options()
    {
        return $this->hasMany('App\V13Option');
    }
}
