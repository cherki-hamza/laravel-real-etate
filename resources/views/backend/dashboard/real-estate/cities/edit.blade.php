@extends('backend.master.app-dashboard')

@section('title' , 'Edit and Update City')

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
                <span class="text-primary">Edit and Update City : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-6 -->
               <div class="col-md-8">

                <div style="margin: 7% auto" class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                         Update the City
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('cities.update',$city->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="form-group my-5">
                              <label for="en_city">English City Title :</label>
                              <input type="text" class="form-control" id="en_city" name="en_city" value="{{$city->en_city}}">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_city">French City Title :</label>
                            <input type="text" class="form-control" id="fr_city" name="fr_city" value="{{$city->fr_city}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_city">Spain City Title :</label>
                            <input type="text" class="form-control" id="es_city" name="es_city" value="{{$city->es_city}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_city">Arabic City Title :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_city" name="ar_city" value="{{$city->ar_city}}">
                        </div>



                          <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <label for="picture">Select City Image :</label>
                                    <input type="file" class="form-control bg-info" id="picture" name="picture"> --}}
                                    <div class="form-group">
                                        <label class="control-label">Select Image Upload File</label>
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
                                            <div class="box-body"></div>
                                          </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                          <div class="dropzone-desc">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                            <p>Choose an image file or drag it here.</p>
                                          </div>
                                          <input type="file" id="picture" name="picture" class="dropzone">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="content">Current Image :</label><br/>
                                    <img style="width: 80px;height: 50px;border-radius: 100%" class="img-circle" src="{{asset($city->photo())}}" name="current_picture" alt="">
                                </div>
                            </div>
                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="Update the City">
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



