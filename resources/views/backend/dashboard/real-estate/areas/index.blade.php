@extends('backend.master.app-dashboard')

@section('title')
  {{__('dashboard.Show_All_Areas')}}
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

            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <span class="text-primary">{{__('dashboard.Show_All_Areas')}} : </span>
                    </h1>
                </div>
                <div class="col-md-6 {{(LaravelLocalization::getCurrentLocale() ==='ar')?'text-left':'text-right'}}">
               <a href="{{route('areas.create')}}"> <span class="btn btn-primary">{{__('dashboard.Add_New_Area')}}</span></a>
            </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

              <!-- start div 2 col-md-6 -->
              <div class="col-md-12">
                <div class="box box-primary">
                     <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                   <!-- end alert -->
                <h2 class="text-success">{{__('dashboard.Show_All_Areas')}}</h2>
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
                        <th class="bg-info">{{__('dashboard.Edit')}}</th>
                        <th class="bg-danger">{{__('dashboard.Delete')}}</th>
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


                            <td><a href="{{route('areas.edit' , $area->id)}}">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit "></i>{{__('dashboard.Edit')}}</span></a></td>

                            <td> <form action="{{route('areas.destroy' , $area->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash"></i> {{__('dashboard.Delete')}}</button>
                            </form>
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
         </div>
              <!-- end div 2 col-md-6 -->

        </section>
    </div>
    <!-- end row  -->
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



