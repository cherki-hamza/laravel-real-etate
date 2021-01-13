<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Area extends Model
{

    protected $fillable = ['city_id','en_area', 'fr_area', 'es_area', 'ar_area', 'picture',
                           'en_area_slug', 'fr_area_slug', 'es_area_slug', 'ar_area_slug'
    ];

    // method to return all listinings by area
    public function listings()
    {
        return $this->hasMany('App\Models\Listings');
    }

    // methode for return city for any area
    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    // methode to get picture
    public function photo(){
        return 'public/'.$this->picture;
    }

}
