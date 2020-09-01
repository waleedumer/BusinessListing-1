<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable=['name','slug','country_id'];
    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }
}
