<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    function owner (){
        return $this->belongsTo('App\owner');
    }
}
