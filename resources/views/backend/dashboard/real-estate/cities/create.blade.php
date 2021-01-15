@extends('backend.master.app-dashboard')

@section('title')
{{__('dashboard.Add_New_City')}}
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
                <span class="text-primary">{{__('dashboard.Add_New_City')}} : </span>
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
                        {{__('dashboard.Add_New_City')}}
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('cities.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group my-5">
                              <label for="en_city">{{__('dashboard.English_Title')}} :</label>
                              <input type="text" class="form-control" id="en_city" name="en_city">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_city">{{__('dashboard.French_Title')}}  :</label>
                            <input type="text" class="form-control" id="fr_city" name="fr_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_city">{{__('dashboard.Spain_Title')}} :</label>
                            <input type="text" class="form-control" id="es_city" name="es_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_city">{{__('dashboard.Arabic_Title')}} :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_city" name="ar_city">
                        </div>



                          <div class="form-group my-5">

                              {{-- <div class="row">
                                  <div class="col-md-12">
                                      <label for="picture">Select Image City :</label>
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
                              <input type="submit" class="btn btn-success btn-block" value="{{__('dashboard.Add_New_City')}}">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success"> {{__('dashboard.Show_All_Cities')}}:</h2>
                        <div class="box-body table-responsive">
                        <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-success">
                                    <th>#{{__('dashboard.Id')}}</th>
                                    <th>{{__('dashboard.City_Image')}}</th>
                                    <th>{{__('dashboard.English_Title')}}</th>
                                    <th>{{__('dashboard.French_Title')}}</th>
                                    <th>{{__('dashboard.Spain_Title')}}</th>
                                    <th>{{__('dashboard.Arabic_Title')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                <tr class="">
                                    <td>{{$city->id}}</td>
                                    <td>
                                        <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($city->photo())}}" alt="{{$city->en_city}}">
                                    </td>
                                    <td>{{$city->en_city}}</td>
                                    <td>{{$city->fr_city}}</td>
                                    <td>{{$city->es_city}}</td>
                                    <td>{{$city->ar_city}}</td>
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



