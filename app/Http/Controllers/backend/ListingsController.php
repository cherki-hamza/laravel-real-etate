<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;
use App\Traits\RemoveImageTrait;

class ListingsController extends Controller
{
    use ImageTrait, RemoveImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();
        return view('backend.dashboard.real-estate.listings.index' , ['listings'=>$listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $areas = Area::all();
        $cities = City::all();
        return view('backend.dashboard.real-estate.listings.create' , ['categories'=>$categories , 'areas'=>$areas , 'cities' => $cities]);
    }

    // methode for upload image from ckeditor to public images
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         /* $request->validate([
            'picture' => 'required|mimes:png,jpg,svg,jpeg',
        ]); */

         $images_data = [];


        if($request->hasfile('images'))
        {
            // make directory if not created yet
            if (!is_dir(public_path('/assets-file/images/listings'))){
                mkdir(public_path('/assets-file/images/listings') , 0777);
            }

            // get and save all images[]
           foreach($request->file('images') as $image)
           {
            $path = '/assets-file/images/listings/';
            $name= $path.time().'-'.$image->getClientOriginalName();
            $image->move(public_path().'/assets-file/images/listings/', $name);
            $images_data[] = $name;
           }


        }

        $listing = new Listing();
        $listing->user_id = Auth::user()->id;
        $listing->category_id = $request->get('l_category');
        $listing->area_id = $request->get('l_area');
        $listing->city_id = $request->get('l_city');

        $listing->map = $request->get('map');

        $listing->ref = $request->get('l_ref');
        $listing->email = $request->get('l_email');
        $listing->tel = $request->get('l_tel');

        $listing->en_title = $request->get('en_title');
        $listing->fr_title = $request->get('fr_title');
        $listing->es_title = $request->get('es_title');
        $listing->ar_title = $request->get('ar_title');

        $listing->en_slug = Str::slug($request->get('en_title') , '-');
        $listing->fr_slug = Str::slug($request->get('fr_title') , '-');
        $listing->es_slug = Str::slug($request->get('es_title') , '-');
        $listing->ar_slug = str_replace(' ', '-' , $request->get('ar_title') );

        $listing->en_desc = $request->get('en_desc');
        $listing->fr_desc = $request->get('fr_desc');
        $listing->es_desc = $request->get('es_desc');
        $listing->ar_desc = $request->get('ar_desc');

        $listing->en_more_info = $request->get('en_more_info');
        $listing->fr_more_info = $request->get('fr_more_info');
        $listing->es_more_info = $request->get('es_more_info');
        $listing->ar_more_info = $request->get('ar_more_info');

        if(Auth::user()->role === 'admin'){
            $listing->status = 1;
        }elseif(Auth::user()->role === 'editor'){
            $listing->status = 1;
        }else{
            $listing->status = 0;
        }

        if(Auth::user()->role == 'admin'){
            $listing->reference = 'enable';
        }elseif(Auth::user()->role == 'editor'){
            $listing->reference = 'disable';
        }else{
            $listing->reference = '';
        }

        $listing->type_listing = $request->get('l_type');
        $listing->price = $request->get('l_price');
        $listing->space = $request->get('l_space');
        $listing->measure = $request->get('measure');



        $listing->images = json_encode($images_data);



        $listing->save();


        return redirect()->route('listings.index')->with('success','The Listing saved With success');


    }

    // function to get reference id
    /* public function ref(){
        $user_id = Auth::user()->id;
        $rand_ref = Str::random(6);
        $ref = 'Ref : '.$user_id.''.$rand_ref;
        return $ref;
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::where('id',$id)->first();
        $categories = Category::all();
        $areas = Area::all();
        return view('backend.dashboard.real-estate.listings.show' , ['listing'=>$listing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::where('id',$id)->first();
        $categories = Category::all();
        $areas = Area::all();
        $cities = City::all();
        return view('backend.dashboard.real-estate.listings.edit' , ['listing'=>$listing , 'categories'=>$categories , 'areas'=>$areas , 'cities' => $cities]);
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

        $images_data = [];
        $listing = Listing::where('id',$id)->first();

        if(Auth::user()->role === 'admin'){
            $status = 1;
        }elseif(Auth::user()->role === 'editor'){
            $status = 1;
        }else{
            $status = 0;
        }

        if(Auth::user()->role == 'admin'){
            $reference = 'enable';
        }elseif(Auth::user()->role == 'editor'){
            $reference = 'disable';
        }else{
            $reference = '';
        }

        if ($request->hasFile('images')){
            // remove oldes images
            $the_images = json_decode($listing->images);
            foreach ($the_images as $img){
                $remove_currents_images = $this->RemoveImage($img);
            }

            // save new pictures
             // make directory if not created yet
             if (!is_dir(public_path('/assets-file/images/listings'))){
                mkdir(public_path('/assets-file/images/listings') , 0777);
            }


            // get and save all images[]
           foreach($request->file('images') as $image)
           {
             //$name = $this->saveImages($image , 'assets-file/images/listings');
             $path = '/assets-file/images/listings/';
             $name= $path.time().'-'.$image->getClientOriginalName();
             $image->move(public_path().'/assets-file/images/listings/', $name);
             $images_data[] = $name;
           }

                $listing->update([
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->l_category,
                    'area_id' => $request->l_area,
                    'city_id' => $request->l_city,

                    'map'  => $request->get('map'),

                    'ref' => $request->l_ref,
                    'email' => $request->l_email,
                    'tel' => $request->l_tel,

                    'en_title' => $request->get('en_title'),
                    'fr_title' => $request->get('fr_title'),
                    'es_title' => $request->get('es_title'),
                    'ar_title' => $request->get('ar_title'),

                    'en_slug' => Str::slug($request->get('en_title') , '-'),
                    'fr_slug' => Str::slug($request->get('fr_title') , '-'),
                    'es_slug' => Str::slug($request->get('es_title') , '-'),
                    'ar_slug' => str_replace(' ', '-' , $request->get('ar_title') ),

                    'en_desc' => $request->get('en_desc'),
                    'fr_desc' => $request->get('fr_desc'),
                    'es_desc' => $request->get('es_desc'),
                    'ar_desc' => $request->get('ar_desc'),

                    'en_more_info' => $request->get('en_more_info'),
                    'fr_more_info' => $request->get('fr_more_info'),
                    'es_more_info' => $request->get('es_more_info'),
                    'ar_more_info' => $request->get('ar_more_info'),

                    'status' => $status,
                    'reference' => $reference,


                    'type_listing' => $request->l_type,
                    'price' => $request->l_price,
                    'space' => $request->l_space,
                    'measure' => $request->measure,

                    'images'   => json_encode($images_data),

                ]);

       }else{
                $listing->update([
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->l_category,
                    'area_id' => $request->l_area,
                    'city_id' => $request->l_city,

                    'map'  => $request->get('map'),

                    'ref' => $request->l_ref,
                    'email' => $request->l_email,
                    'tel' => $request->l_tel,

                    'en_title' => $request->get('en_title'),
                    'fr_title' => $request->get('fr_title'),
                    'es_title' => $request->get('es_title'),
                    'ar_title' => $request->get('ar_title'),

                    'en_slug' => Str::slug($request->get('en_title') , '-'),
                    'fr_slug' => Str::slug($request->get('fr_title') , '-'),
                    'es_slug' => Str::slug($request->get('es_title') , '-'),
                    'ar_slug' => str_replace(' ', '-' , $request->get('ar_title') ),

                    'en_desc' => $request->get('en_desc'),
                    'fr_desc' => $request->get('fr_desc'),
                    'es_desc' => $request->get('es_desc'),
                    'ar_desc' => $request->get('ar_desc'),

                    'en_more_info' => $request->get('en_more_info'),
                    'fr_more_info' => $request->get('fr_more_info'),
                    'es_more_info' => $request->get('es_more_info'),
                    'ar_more_info' => $request->get('ar_more_info'),

                    'status' => $status,
                    'reference' => $reference,


                    'type_listing' => $request->l_type,
                    'price' => $request->l_price,
                    'space' => $request->l_space,
                    'measure' => $request->measure,

                    ]);
       }

       return redirect()->route('listings.index')->with('success','the Listing updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::where('id',$id)->first();

        $the_images = json_decode($listing->images);
        foreach ($the_images as $img){
            $remove_currents_images = $this->RemoveImage($img);
        }

        $this->RemoveImage($listing->images);
        $listing->delete();
        return redirect()->back()->with('danger', 'the category deleted with success');
    }
}
