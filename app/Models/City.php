<?php

namespace App\Models;
use App\Models\Area;
use App\Models\Listing;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['en_city', 'fr_city', 'es_city', 'ar_city', 'picture',
                           'en_city_slug', 'fr_city_slug', 'es_city_slug', 'ar_city_slug'
    ];

    // method to return all listinings by city
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    // methode for return all areas by city
    public function areas(){
        return $this->hasMany(Area::class);
    }


    // methode to get picture
    public function photo(){
        return $this->picture;
    }
}
