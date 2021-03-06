<?php

namespace Wezaworkshop;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function disciplines(){
        return $this->belongsToMany('Wezaworkshop\Discipline')->withTimestamps();
    }
    public function transactionstatus(){
        return $this->belongsTo('Wezaworkshop\Transactionstatus');
    }
    public function bids(){
        return $this->hasMany('Wezaworkshop\Bid');
    }
    public function documents(){
        return $this->hasMany('Wezaworkshop\Document');
    }
    public function transactions(){
        return $this->hasMany('Wezaworkshop\Transaction');
    }
    public function orderstatus(){
        return $this->belongsTo('Wezaworkshop\Orderstatus');
    }
    public function typeofwork(){
        return $this->belongsTo('Wezaworkshop\Typeofwork');
    }
    public function citation(){
        return $this->belongsTo('Wezaworkshop\Citation');
    }

}
