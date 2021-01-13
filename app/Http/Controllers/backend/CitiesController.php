<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;
use App\Traits\RemoveImageTrait;

class CitiesController extends Controller
{
    use ImageTrait, RemoveImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('backend.dashboard.real-estate.cities.index' , ['cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('backend.dashboard.real-estate.cities.create' , ['cities'=>$cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|mimes:png,jpg,svg,jpeg'
        ]);

          $city  = new City();

          $city->en_city = $request->get('en_city');
          $city->fr_city = $request->get('fr_city');
          $city->es_city = $request->get('es_city');
          $city->ar_city = $request->get('ar_city');

          $city->en_city_slug = Str::slug($request->get('en_city') , '-');
          $city->fr_city_slug = Str::slug($request->get('fr_city') , '-');
          $city->es_city_slug = Str::slug($request->get('es_city') , '-');
          $city->ar_city_slug = str_replace(' ', '-' , $request->get('ar_city') );

          $picture = null;

          if ($request->hasFile('picture')){
            // make directory if not created yet
            if (!is_dir(public_path('/assets-file/images'))){
                mkdir(public_path('/assets-file/images/cities') , 0777);
            }

            // save file to the public folder
            $picture = $this->saveImages($request->picture , 'assets-file/images/cities' );

          }

          $city->picture = $picture;

          $city->save();

          return redirect()->back()->with('success','the City adding with success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::where('id',$id)->first();
        return view('backend.dashboard.real-estate.cities.edit' , ['city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $city = City::where('id',$id)->first();

        $picture = '';
        $removable_image_msg = '';
        if ($request->hasFile('picture')){
            // validation
            $request->validate([
                'picture' => 'required|mimes:png,jpg,svg,jpeg'
            ]);

            // make directory if not created yet
            if (!is_dir(public_path('/assets-file/images'))){
                mkdir(public_path('/assets-file/images/cities') , 0777);
            }

             // remove current file frop public folder
             $removable_image_msg = $this->RemoveImage($city->picture);
             // save file to the public folder
             $picture = $this->saveImages($request->picture , 'assets-file/images/cities' );
             $city->update([
                'en_city'         => $request->get('en_city'),
                'fr_city'         => $request->get('fr_city'),
                'es_city'         => $request->get('es_city'),
                'ar_city'         => $request->get('ar_city'),

                'en_city_slug'         => Str::slug($request->get('en_city_slug') , '-'),
                'fr_city_slug'         => Str::slug($request->get('fr_city_slug') , '-'),
                'es_city_slug'         => Str::slug($request->get('es_city_slug') , '-'),
                'ar_city_slug'         => str_replace(' ', '-' , $request->get('ar_city_slug')),

                'picture'         => $picture,

         ]);
         }else{
            $city->update([

                'en_city'         => $request->get('en_city'),
                'fr_city'         => $request->get('fr_city'),
                'es_city'         => $request->get('es_city'),
                'ar_city'         => $request->get('ar_city'),

                'en_city_slug'         => Str::slug($request->get('en_city_slug') , '-'),
                'fr_city_slug'         => Str::slug($request->get('fr_city_slug') , '-'),
                'es_city_slug'         => Str::slug($request->get('es_city_slug') , '-'),
                'ar_city_slug'         => str_replace(' ', '-' , $request->get('ar_city_slug')),
         ]);
       }

          return redirect()->route('cities.index')->with('success','the City updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = City::where('id',$id)->first();
        $area->delete();
        return redirect()->back()->with('danger', 'the city deleted with success');
    }
}
