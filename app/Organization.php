<?php

namespace Wezaworkshop;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    public function address(){
        return $this->morphMany('Wezaworkshop\Address','addressable');
    }

}
