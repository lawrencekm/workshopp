<?php

namespace Wezaworkshop;

use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
    //
    public function payments(){
        return $this->hasMany('Wezaworkshop\Payment');
    }
}
