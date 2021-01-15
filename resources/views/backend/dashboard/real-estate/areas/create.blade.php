@extends('backend.master.app-dashboard')

@section('title')
{{__('dashboard.Add_New_Area')}}
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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="text-primary">{{__('dashboard.Add_New_Area')}} : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-6 -->
               <div class="col-md-6">

                <div class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                        {{__('dashboard.Add_New_Area')}}
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf

                            <div class="form-group my-5">
                                <label for="city_id">{{__('dashboard.City')}} :</label>
                                <select class="form-control" name="city_id" id="city_id">
                                    <option> {{__('dashboard.City')}} </option>
                                    @foreach ($cities as $city)
                                      <option value="{{$city->id}}"> {{$city->en_city}} </option>
                                    @endforeach
                                </select>
                            </div>

                          <div class="form-group my-5">
                              <label for="en_area">{{__('dashboard.English_Title')}} :</label>
                              <input type="text" class="form-control" id="en_area" name="en_area">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_area">{{__('dashboard.French_Title')}} :</label>
                            <input type="text" class="form-control" id="fr_area" name="fr_area">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_area">{{__('dashboard.Spain_Title')}} :</label>
                            <input type="text" class="form-control" id="es_area" name="es_area">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_area">{{__('dashboard.Arabic_Title')}} :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_area" name="ar_area">
                        </div>



                          <div class="form-group my-5">

                              {{-- <div class="row">
                                  <div class="col-md-12">
                                      <label for="picture">Select Image if you want or leave Empty :</label>
                                      <input type="file" class="form-control bg-info" id="picture" name="picture">
                                  </div>
                              </div> --}}

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

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="{{__('dashboard.Add_New_Area')}}">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success">{{__('dashboard.AREAS')}}</h2>
                        <div class="box-body table-responsive">
                        <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-success">
                                    <th>#{{__('dashboard.Id')}}</th>
                                    <th>{{__('dashboard.Area_Image')}}</th>
                                    <th>{{__('dashboard.City')}}</th>
                                    <th>{{__('dashboard.English_Title')}}</th>
                                    <th>{{__('dashboard.French_Title')}}</th>
                                    <th>{{__('dashboard.Spain_Title')}}</th>
                                    <th>{{__('dashboard.Arabic_Title')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                <tr class="">
                                    <td>{{$area->id}}</td>
                                    <td>
                                        <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($area->photo())}}" alt="{{$area->en_area}}">
                                    </td>
                                    <td>{{$area->city->en_city}}</td>
                                    <td>{{$area->en_area}}</td>
                                    <td>{{$area->fr_area}}</td>
                                    <td>{{$area->es_area}}</td>
                                    <td>{{$area->ar_area}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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



