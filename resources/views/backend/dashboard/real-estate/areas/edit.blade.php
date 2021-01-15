@extends('backend.master.app-dashboard')

@section('title')
{{__('dashboard.Update_Area')}}
@stop

@section('style')
<style>

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
    <div  class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="text-primary">{{__('dashboard.Update_Area')}} : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section  class="content">
            <!-- start row -->
            <div  class="row">

               <!-- start row 1 col-md-6 -->
               <div class="col-md-8">

                <div style="margin: 7% auto" class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                        {{__('dashboard.Update_Area')}}
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('areas.update',$area->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')

                          <div class="form-group my-5">
                            <label for="city_id">{{__('dashboard.City')}} :</label>
                            <select class="form-control" name="city_id" id="city_id">
                                <option selected value="{{$area->city_id}}"> {{$area->city->en_city}} </option>
                                    @foreach ($cities as $city)
                                    <option  value="{{$city->id}}"> {{$city->en_city}} </option>
                                    @endforeach
                            </select>
                         </div>

                          <div class="form-group my-5">
                              <label for="en_area">{{__('dashboard.English_Title')}} :</label>
                              <input type="text" class="form-control" id="en_area" name="en_area" value="{{$area->en_area}}">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_area">{{__('dashboard.French_Title')}} :</label>
                            <input type="text" class="form-control" id="fr_area" name="fr_area" value="{{$area->fr_area}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_area">{{__('dashboard.Spain_Title')}} :</label>
                            <input type="text" class="form-control" id="es_area" name="es_area" value="{{$area->es_area}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_area">{{__('dashboard.Arabic_Title')}} :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_area" name="ar_area" value="{{$area->ar_area}}">
                        </div>



                          <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <label for="picture">Select Image :</label>
                                    <input type="file" class="form-control bg-info" id="picture" name="picture"> --}}
                                    <div class="form-group">
                                        <label class="control-label">{{__('dashboard.Select_Image_Upload_File')}}</label>
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
                                            <div class="box-body"></div>
                                          </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                          <div class="dropzone-desc">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                            <p>{{__('dashboard.Choose_an_image_file_or_drag_it_here')}}.</p>
                                          </div>
                                          <input type="file" id="picture" name="picture" class="dropzone">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="content">{{__('dashboard.Current_Image')}} :</label><br/>
                                    <img style="width: 80px;height: 50px;border-radius: 100%" class="img-circle" src="{{asset($area->photo())}}" name="current_picture" alt="">
                                </div>
                            </div>
                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="{{__('dashboard.Update_Area')}}">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



