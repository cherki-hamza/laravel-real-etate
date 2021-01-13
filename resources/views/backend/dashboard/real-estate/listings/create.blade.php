@extends('backend.master.app-dashboard')

@section('title' , 'Add New Listing')

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
                <span class="text-primary">Create New Listings : </span>
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
                         Add New Listings
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('listings.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <!-- start reference + email + mobile -->
                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_ref">Listing Reference :</label>
                                    <strong>Exemple : <span class="text-danger">Ref-01 , Ref-101 , VA100 , VR200 ..</span></strong>
                                    <input type="text" class="form-control" id="l_ref" name="l_ref">

                                    <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()->id}}">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_email">Email :</label>
                                    <input type="text" class="form-control" id="l_email" name="l_email" value="{{(Auth::user()) ? Auth::user()->email : '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_tel">Mobile :</label>
                                    <input type="text" class="form-control" id="l_tel" name="l_tel" value="{{(Auth::user()) ? Auth::user()->mobile : '' }}">
                                </div>
                            </div>
                          </div>
                          <!-- end reference + email + mobile -->

                          <!-- start map -->
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="map">Listing Map add the embeded html map ( or live Empty )  :</label>

                                    <textarea class="form-control" id="map"  name="map" cols="30" rows="10" ></textarea>

                                </div>
                            </div>
                          </div>
                          <!-- end map -->

                          <!-- start listing en_title and fr_title -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="en_title">Lising English Title :</label>
                                    {{-- <input type="text" class="form-control" id="en_title" name="en_title"> --}}
                                    <input id="en_title" type="hidden" name="en_title" value="" />
                                     <trix-editor input="en_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="fr_title">Lising Franch Title :</label>
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
                                    <label class="text-success font-weight-bolder" for="es_title">Lising Spain Title :</label>
                                    {{-- <input type="text" class="form-control" id="es_title" name="es_title"> --}}
                                    <input id="es_title" type="hidden" name="es_title" value="" />
                                     <trix-editor input="es_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="ar_title">Lising Arabic Title :</label>
                                    {{-- <input type="text" class="form-control" id="ar_title" name="ar_title"> --}}
                                    <input id="ar_title" type="hidden" name="ar_title" value="" />
                                     <trix-editor  input="ar_title"></trix-editor>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_title and ar_title -->

                          <!-- start listing Category and city and erea -->
                          <div class="row">

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_category">Select Lising Category :</label>
                                    <select class="form-control" name="l_category" id="l_category">
                                        <option>Select Category</option>
                                       @foreach ($categories as $cat)
                                      <option value="{{$cat->id}}"> {{$cat->en_title}} </option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_city">Select Lising City :</label>
                                    <select class="form-control" name="l_city" id="l_city">
                                        <option> select city </option>
                                        @foreach ($cities as $city)
                                          <option value="{{$city->id}}"> {{$city->en_city}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_area">Select Lising Area :</label>
                                    <select class="form-control" name="l_area" id="l_area">
                                        <option> select area </option>
                                        @foreach ($areas as $area)
                                          <option value="{{$area->id}}"> {{$area->en_area}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          </div>
                          <!-- end start listing Category and city and erea -->

                           <!-- start listing price and space -->
                           <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_type">Lising Type :</label>
                                    <select class="form-control" name="l_type" id="l_type">
                                      <option>Selet Type :</option>
                                      <option value="Buy">Buy</option>
                                      <option value="Rent">Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_price">Lising Price :</label>
                                    <input type="text" class="form-control" id="l_price" name="l_price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_space">Lising Space :</label>
                                    <input type="text" class="form-control" id="l_space" name="l_space">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="measure">Lising Space Measure :</label>
                                    <select class="form-control" name="measure" id="measure">
                                        <option><span class="text-success">Select Measure</span></option>
                                       <option value="m²"> m² </option>
                                       <option value="Hectare"> Hectare </option>

                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing price and space -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                          <!-- start listing en_desc and fr_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="en_desc">English Lising Description :</label>
                                    <textarea name="en_desc" class="form-control" id="editor" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_desc">Franch Lising Description :</label>
                                    <textarea name="fr_desc" class="form-control" id="fr_desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_desc and fr_desc -->

                          <!-- start listing es_desc and ar_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_desc">Spain Lising Description :</label>
                                    <textarea name="es_desc" class="form-control" id="es_desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_desc">Arabic Lising Description :</label>
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
                                    <label class="text-success" for="en_more_info">English Lising More Info :</label>
                                    <textarea name="en_more_info" class="form-control" id="en_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_more_info">Franch Lising More Info :</label>
                                    <textarea name="fr_more_info" class="form-control" id="fr_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_more_info and fr_more_info -->

                          <!-- start listing es_more_info and ar_more_info -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_more_info">Spain Lising More Info :</label>
                                    <textarea name="es_more_info" class="form-control" id="es_more_info" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_more_info">Arabic Lising More Info :</label>
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
                                <label class="control-label text-success">Select Image Upload File</label>
                                <div class="preview-zone hidden">
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <div><b>Preview</b></div>
                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                          <i class="fa fa-times"></i> Reset This Form
                                        </button>
                                      </div>
                                    </div>
                                    {{-- <div class="box-body"></div> --}}
                                  </div>
                                </div>
                                <div class="dropzone-wrapper">
                                  <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Choose an image or images file or drag it here.</p>
                                  </div>
                                  <input multiple type="file" id="images" name="images[]" class="dropzone">
                                </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="Save Listing">
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



