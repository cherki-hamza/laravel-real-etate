@extends('backend.master.app-dashboard')

@section('title')
  {{__('dashboard.Add_New_Listing')}}
@stop

@section('style')
<style>
 .trix-button-group--file-tools { display: none !important; }
</style>
@stop

@section('content')
<div class="wrapper">

    <!-- Start Main Header -->
       @include('backend.inc.top-header')
    <!-- End Main Header -->

    <!-- Start Left side column. contains the logo and sidebar -->
       @include('backend.inc.aside-menu')
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="text-primary">{{__('dashboard.Add_New_Listing')}} : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-12 -->
               <div class="col-md-12">

                <div class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                        {{__('dashboard.Add_New_Listing')}}
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('listings.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <!-- start reference + email + mobile -->
                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_ref">{{__('dashboard.REF')}} :</label>
                                    <strong>{{__('dashboard.Example')}} : <span class="text-danger">{{__('dashboard.ex')}}</span></strong>
                                    <input type="text" class="form-control" id="l_ref" name="l_ref">

                                    <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()->id}}">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_email">{{__('dashboard.email')}} :</label>
                                    <input type="text" class="form-control" id="l_email" name="l_email" value="{{(Auth::user()) ? Auth::user()->email : '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_tel">{{__('dashboard.Mobile')}} :</label>
                                    <input type="text" class="form-control" id="l_tel" name="l_tel" value="{{(Auth::user()) ? Auth::user()->mobile : '' }}">
                                </div>
                            </div>
                          </div>
                          <!-- end reference + email + mobile -->

                          <!-- start map -->
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="map">{{__('dashboard.map')}}  :</label>

                                    <textarea class="form-control" id="map"  name="map" cols="30" rows="10" ></textarea>

                                </div>
                            </div>
                          </div>
                          <!-- end map -->

                          <!-- start listing en_title and fr_title -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="en_title">{{__('dashboard.English_Title')}} :</label>
                                    {{-- <input type="text" class="form-control" id="en_title" name="en_title"> --}}
                                    <input id="en_title" type="hidden" name="en_title" value="" />
                                     <trix-editor input="en_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="fr_title">{{__('dashboard.French_Title')}} :</label>
                                    {{-- <input type="text" class="form-control" id="fr_title" name="fr_title"> --}}
                                    <input id="fr_title" type="hidden" name="fr_title" value="" />
                                     <trix-editor input="fr_title"></trix-editor>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_title and fr_title -->

                          <!-- start listing es_title and ar_title -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="es_title">{{__('dashboard.Spain_Title')}}:</label>
                                    {{-- <input type="text" class="form-control" id="es_title" name="es_title"> --}}
                                    <input id="es_title" type="hidden" name="es_title" value="" />
                                     <trix-editor input="es_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="ar_title">{{__('dashboard.Arabic_Title')}} :</label>
                                    {{-- <input type="text" class="form-control" id="ar_title" name="ar_title"> --}}
                                    <input id="ar_title" type="hidden" name="ar_title" value="" />
                                     <trix-editor  input="ar_title"></trix-editor>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_title and ar_title -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                          <!-- start listing Category and city and erea -->
                          <div class="row">

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_category">{{__('dashboard.Select_Listing_Category')}} :</label>
                                    <select class="form-control" name="l_category" id="l_category">
                                        <option>{{__('dashboard.Select_Listing_Category')}}</option>
                                       @foreach ($categories as $cat)
                                      <option value="{{$cat->id}}"> {{$cat->en_title}} </option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_city">{{__('dashboard.Select_Listing_City')}} :</label>
                                    <select class="form-control" name="l_city" id="l_city">
                                        <option> {{__('dashboard.Select_Listing_City')}} </option>
                                        @foreach ($cities as $city)
                                          <option value="{{$city->id}}"> {{$city->en_city}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_area">{{__('dashboard.Select_Listing_Area')}} :</label>
                                    <select class="form-control" name="l_area" id="l_area">
                                        <option> {{__('dashboard.Select_Listing_Area')}} </option>
                                        @foreach ($areas as $area)
                                          <option value="{{$area->id}}"> {{$area->en_area}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          </div>
                          <!-- end start listing Category and city and erea -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                           <!-- start listing price and space -->
                           <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_type">{{__('dashboard.Listing_Type')}} :</label>
                                    <select class="form-control" name="l_type" id="l_type">
                                      <option>Selet Type :</option>
                                      <option value="Buy">Buy</option>
                                      <option value="Rent">Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_price">{{__('dashboard.Listing_Price')}}  :</label>
                                    <input type="text" class="form-control" id="l_price" name="l_price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_space">{{__('dashboard.Listing_Space')}} :</label>
                                    <input type="text" class="form-control" id="l_space" name="l_space">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="measure">{{__('dashboard.Lising_Space_Measure')}} :</label>
                                    <select class="form-control" name="measure" id="measure">
                                        <option><span class="text-success">{{__('dashboard.mesure')}}</span></option>
                                       <option value="m²"> m² </option>
                                       <option value="Hectare"> Hectare </option>

                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing price and space -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">





                           <!-- start listing nombre of room + living room + bathrooms + bedrooms -->
                           <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_rooms">{{__('dashboard.Number_of_Rooms ')}} :</label>
                                    <input type="text" class="form-control" id="nbr_rooms" name="nbr_rooms">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_living_romm">{{__('dashboard.Number_of_Living_Room ')}} :</label>
                                    <input type="text" class="form-control" id="nbr_living_romm" name="nbr_living_romm">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_bathroom">{{__('dashboard.Number_of_Bathrooms ')}} :</label>
                                    <input type="text" class="form-control" id="nbr_bathroom" name="nbr_bathroom">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_bedrooms">{{__('dashboard.Number_of_Bedrooms ')}} :</label>
                                    <input type="text" class="form-control" id="nbr_bedrooms" name="nbr_bedrooms">
                                </div>
                            </div>
                          </div>
                          <!-- end start listing nombre of room + living room + bathrooms + bedrooms -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                         <!-- start listing balcony + terrace + view + garden -->
                         <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="balcony">{{__('dashboard.Balcony')}} :</label>
                                    <select class="form-control" name="balcony" id="balcony">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="terrace">{{__('dashboard.Terrace')}} :</label>
                                    <select class="form-control" name="terrace" id="terrace">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option value="yes"> yes </option>
                                       <option value="none"> none </option>

                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="view"> {{__('dashboard.View')}} :</label>
                                    <select class="form-control" name="view" id="view">
                                        <option><span class="text-success">select view</span></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="garden">{{__('dashboard.Garden')}} :</label>
                                    <select class="form-control" name="garden" id="garden">
                                        <option><span class="text-success">select garden</span></option>
                                        <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing balcony + terrace + view + garden -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">


                            <!-- start listing garage + parking + piscine  -->
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="garage">{{__('dashboard.Garage')}} :</label>
                                    <select class="form-control" name="garage" id="garage">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="parking">{{__('dashboard.Parking')}} :</label>
                                    <select class="form-control" name="parking" id="parking">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="swimming_pool"> {{__('dashboard.Swimming_Pool')}} :</label>
                                    <select class="form-control" name="swimming_pool" id="swimming_pool">
                                        <option><span class="text-success">select view</span></option>
                                       <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing data b -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">


                          <!-- start listing en_desc and fr_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="en_desc">{{__('dashboard.en_desc')}} :</label>
                                    <textarea name="en_desc" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_desc">{{__('dashboard.fr_desc')}} :</label>
                                    <textarea name="fr_desc" class="form-control" id="fr_desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_desc and fr_desc -->

                          <!-- start listing es_desc and ar_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_desc">{{__('dashboard.es_desc')}} :</label>
                                    <textarea name="es_desc" class="form-control" id="es_desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_desc">{{__('dashboard.ar_desc')}} :</label>
                                    <textarea dir="rtl" name="ar_desc" class="form-control" id="ar_desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_desc and ar_desc -->

                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                          <!-- start listing en_more_info and fr_more_info -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="en_more_info">{{__('dashboard.en_more_info')}} :</label>
                                    <textarea name="en_more_info" class="form-control" id="en_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_more_info">{{__('dashboard.fr_more_info')}} :</label>
                                    <textarea name="fr_more_info" class="form-control" id="fr_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_more_info and fr_more_info -->

                          <!-- start listing es_more_info and ar_more_info -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_more_info">{{__('dashboard.es_more_info')}} :</label>
                                    <textarea name="es_more_info" class="form-control" id="es_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_more_info">{{__('dashboard.ar_more_info')}} :</label>
                                    <textarea dir="rtl" name="ar_more_info" class="form-control" id="ar_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_desc and ar_desc -->

                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">




                          <div class="form-group my-5">

                              {{-- <div class="row">
                                  <div class="col-md-12">
                                      <label class="text-success" for="images">Select Images you can select (1 to 10 image) :</label>
                                      <input type="file" class="form-control bg-info" id="images" name="images[]" multiple>
                                  </div>
                              </div> --}}

                              <div class="form-group">
                                <label class="control-label text-success">{{__('dashboard.Select_Image_Upload_File')}}</label>
                                <div class="preview-zone hidden">
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <div><b>{{__('dashboard.Preview')}}</b></div>
                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                          <i class="fa fa-times"></i> {{__('dashboard.Reset_This_Form')}}
                                        </button>
                                      </div>
                                    </div>
                                    {{-- <div class="box-body"></div> --}}
                                  </div>
                                </div>
                                <div class="dropzone-wrapper">
                                  <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>{{__('dashboard.Choose_an_image_file_or_drag_it_here')}}.</p>
                                  </div>
                                  <input multiple type="file" id="images" name="images[]" class="dropzone">
                                </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="{{__('dashboard.Add_New_Listing')}}">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-12 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 @stop


@section('script')

<script>
   Trix.config.blockAttributes.default.tagName = "p";
</script>

{{-- <script>
   CKEDITOR.replace( 'en_desc', {
    language: 'en',
    uiColor: '#9AB8F3  #337ab7'
});
</script> --}}

<script>
    // descriptions
    CKEDITOR.replace( 'en_desc', {
        language: 'en',
        uiColor: '#9AB8F3',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'fr_desc', {
        language: 'fr',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'es_desc', {
        language: 'es',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'ar_desc', {
        language: 'ar',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    // More Infos
    CKEDITOR.replace( 'en_more_info', {
        language: 'en',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'fr_more_info', {
        language: 'fr',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'es_more_info', {
        language: 'es',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'ar_more_info', {
        language: 'ar',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });


</script>

@stop



