<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable=['name','price','validity','ability_to_add_video','ability_to_add_contact_form','number_of_photos','number_of_tags','number_of_categories','is_recommended','package_type','number_of_listings','featured'];
    public function listings(){
        return $this->belongsToMany('App\Listing');
    }
}
