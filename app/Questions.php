<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table="questions";
    public function solutions()
    {
        return $this->hasOne('App\Solutions');
    }
}
