<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Area;
use App\Models\City;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Listing extends Model
{
    protected $fillable = ['user_id' , 'category_id' , 'area_id' , 'city_id','map', 'ref' ,'email' , 'tel' , 'en_title' , 'fr_title','es_title', 'ar_title' ,
                          'en_slug', 'fr_slug','es_slug' , 'ar_slug' , 'en_desc' , 'fr_desc' , 'es_desc' , 'ar_desc' , 'en_more_info',
                          'fr_more_info' , 'es_more_info' ,'ar_more_info',  'status' , 'reference' , 'type_listing'  , 'price' , 'space', 'measure' ,'images'
    ];

        // methode to get the category of Lising
        public function category(){
        return $this->belongsTo('App\Models\Category');
        }

        // methode to get the area of Lising
        public function area(){
            return $this->belongsTo('App\Models\Area');
        }

      // methode to get the area of Lising
      public function city(){
        return $this->belongsTo('App\Models\City');
      }

      // methode to handel direction language
      /* public function handel_dir_to_rtl(){

        if(LaravelLocalization::getCurrentLocale() ==='ar'){
            return 'dir="rtl"';
        }else{
            return '';
        }
      } */

      // methode to handel price by language
      public function handel_Price(){

            if(LaravelLocalization::getCurrentLocale() ==='en'){
                return $this->price.' $';
            }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
                return $this->price.'  €';
            }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
                return $this->price.'  €';
            }else{
                return $this->price.' DH';
            }
       }

       // methode to handel Title by language
       public function handel_listing_title(){

        if(LaravelLocalization::getCurrentLocale() ==='en'){
        return $this->en_title;
        }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
        return $this->fr_title;
        }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
        return $this->es_title;
        }else{
        return $this->ar_title;
        }
    }

       // methode to handel More Informations by language
       public function handel_listing_More_info(){

            if(LaravelLocalization::getCurrentLocale() ==='en'){
            return $this->en_more_info;
            }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
            return $this->fr_more_info;
            }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
            return $this->es_more_info;
            }else{
            return $this->ar_more_info;
            }
        }

        // methode to handel description by language
       public function handel_listing_Desc(){

            if(LaravelLocalization::getCurrentLocale() ==='en'){
            return $this->en_desc;
            }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
            return $this->fr_desc;
            }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
            return $this->es_desc;
            }else{
            return $this->ar_desc;
            }
        }

         // methode to handel description by language
       public function handel_listing_city(){

            if(LaravelLocalization::getCurrentLocale() ==='en'){
            return $this->city->en_city;
            }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
            return $this->city->fr_city;
            }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
            return $this->city->es_city;
            }else{
            return $this->city->ar_city;
            }
       }

         // methode to handel description by language
         public function handel_listing_area(){

            if(LaravelLocalization::getCurrentLocale() ==='en'){
            return $this->area->en_area;
            }elseif(LaravelLocalization::getCurrentLocale() ==='fr'){
            return $this->area->fr_area;
            }elseif(LaravelLocalization::getCurrentLocale() ==='es'){
            return $this->area->es_area;
            }else{
            return $this->area->ar_area;
            }
       }

}
