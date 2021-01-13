@extends('backend.master.app-dashboard')

@section('title')
{{__('dashboard.ALL_CONTACTS')}}
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
    @if(LaravelLocalization::getCurrentLocale() ==='ar')
       @include('backend.inc.ar-aside-menu')
    @else
        @include('backend.inc.aside-menu')
    @endif
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header my-3">
              <!-- start alert -->
              <span>    @include('backend.alert.alert') </span>
              <!-- end alert -->
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <span class="text-primary">{{__('dashboard.ALL_CONTACTS')}} : </span>
                    </h1>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

              <!-- start div 2 col-md-6 -->
              <div class="col-md-12">
                <div class="box box-primary">

                <h2 class="text-success">{{__('dashboard.SHOW_CONTACT')}}</h2>
                <div class="box-body align-content-center">

                    <div class="col-md-10">
                        <div class="box d-flex box-primary">
                        <div class="box-body box-profile">
                            <div class="bg-warning text-danger float-right">
                                <span class="float-right d-flex">#ID <small class="text-danger" style="margin-left: 4px">{{$contact->id}}</small></span>
                            </div>
                            <img class="profile-user-img img-responsive img-circle" src="{{$contact->getGravatar()}}" alt="{{$contact->name}}">

                            <ul class="list-group ">
                                <li class="list-group-item">
                                <b class="text-success">Email :</b> <p class="text-primary" style="margin-left: 5px;">{{$contact->email}}</p>
                                </li>
                                <li class="list-group-item">
                                    <b class="text-success">Télephone :</b> <p class="text-primary" style="margin-left: 5px;">{{$contact->tel}}</p>
                                    </li>
                                <li class="list-group-item">
                                <b class="text-success">Subject :</b> <p class="text-primary" style="margin-left: 5px;">{{$contact->subject}}</p>
                                </li>
                                <li class="list-group-item">
                                <b class="text-success">Message :</b> <p class="text-primary" style="margin-left: 5px;">{{$contact->message}}</p>
                                </li>

                            </ul>


                        </div>

                        </div>
                     </div>

                </div>
                  </div>
              </div>
              <!-- end div 2 col-md-6 -->
            </div>
        </section>
    </div>
    <!-- end row  -->
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



