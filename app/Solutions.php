<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    protected $table ="solutions";
    public function questions()
    {
        return $this->belongsTo('App\Questions');
    }
}
