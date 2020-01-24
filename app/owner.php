<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    function pets (){
        return $this->hasMany('App\pet');
    }
}
