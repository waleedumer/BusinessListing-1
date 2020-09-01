<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $fillable=[
        'code', 'name','description',
        'categories','amenities','photos',
        'video_url','video_provider','tags',
        'address','email','phone',
        'website','social','user_id',
        'latitude','longitude','country_id',
        'city_id','status','listing_type',
        'listing_thumbnail','listing_cover','seo_meta_tags',
        'meta_description','data_added','data_modified',
        'is_featured','google_analytics_id'
        ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
    public function city(){
        return $this->belongsTo('App\City');
    }
    public function categories(){
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
    public function time(){
        return $this->hasOne('App\TimeConfiguration','listing_id');
    }
    public function reviews(){
        return $this->hasMany('App\Review','listing_id');
    }
}
