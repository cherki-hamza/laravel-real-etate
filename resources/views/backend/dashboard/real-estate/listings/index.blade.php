@extends('backend.master.app-dashboard')

@section('title')
  {{__('dashboard.Show_All_Listings')}}
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
                        <span class="text-primary"> {{__('dashboard.Show_All_Listings')}}: </span>
                    </h1>
                </div>
                <div class="col-md-6 {{(LaravelLocalization::getCurrentLocale() ==='ar')?'text-left':'text-right'}}">
               <a href="{{route('listings.create')}}"> <span class="btn btn-primary"> {{__('dashboard.Add_New_Listing')}}</span></a>
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
                <h2 class="text-success"> {{__('dashboard.Show_All_Listings')}} :</h2>
                <div class="box-body table-responsive">
                <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#{{__('dashboard.Id')}}</th>
                        <th>#{{__('dashboard.REF')}}</th>
                        <th>{{__('dashboard.LISTING_TITLE')}}</th>
                        <th>{{__('dashboard.LISTING_CATEGORY')}}</th>
                        <th>{{__('dashboard.LISTING_AREA')}}</th>
                        <th>{{__('dashboard.LISTING_IMAGE')}}</th>
                        <th class="bg-info">{{__('dashboard.show')}}</th>
                        <th class="bg-warning">{{__('dashboard.Edit')}}</th>
                        <th class="bg-danger">{{__('dashboard.Delete')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($listings as $listing)
                        <tr>
                            <td>{{$listing->id}}</td>
                            <td>{{$listing->ref}}</td>
                            <td>{!!$listing->handel_listing_title() !!}</td>
                            {{-- <td>{{$listing->en_desc}}</td> --}}
                            <td>{{$listing->category->en_title}}</td>
                            <td>{{$listing->area->en_area}}</td>

                            <td>
                                <div class="row">
                                    @foreach (json_decode($listing->images) as $img)
                                     <span> <img style="width: 40px;height: 50px;" src="{{asset('public/'.$img)}}" alt=""> </span>
                                   @endforeach
                                </div>

                            </td>
                            <td>
                                <a href="{{route('listings.show', $listing->id)}}"><span class="btn btn-primary"><i style="margin-right: 5px;" class="fa fa-eye"></i>{{__('dashboard.show')}}</span></a>
                            </td>

                            <td>
                                <a href="{{route('listings.edit', $listing->id)}}"><span class="btn btn-success"><i style="margin-right: 5px;" class="fa fa-eye"></i>{{__('dashboard.Edit')}}</span></a>
                            </td>

                            <td>
                                <form action="{{route('listings.destroy' , $listing->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i style="margin-right: 5px;" class="fa fa-trash"></i> {{__('dashboard.Delete')}}</button>
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



