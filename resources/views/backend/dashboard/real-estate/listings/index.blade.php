@extends('backend.master.app-dashboard')

@section('title' , 'All Listings')

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
                        <span class="text-primary">All Listings : </span>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
               <a href="{{route('listings.create')}}"> <span class="btn btn-primary">Add New Listing</span></a>
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
                <h2 class="text-success">all Listings</h2>
                <div class="box-body">
                <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>#Ref</th>
                        <th>Listing Title</th>
                       {{--  <th>Listing description</th> --}}
                        <th>Listing category</th>
                        <th>Listing area</th>
                        <th>Listing images</th>
                        <th class="bg-info">Show</th>
                        <th class="bg-warning">Edit</th>
                        <th class="bg-danger">Delete</th>
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
                                <a href="{{route('listings.show', $listing->id)}}"><span class="btn btn-primary"><i style="margin-right: 5px;" class="fa fa-eye"></i>Show</span></a>
                            </td>

                            <td>
                                <a href="{{route('listings.edit', $listing->id)}}"><span class="btn btn-success"><i style="margin-right: 5px;" class="fa fa-eye"></i>Edit</span></a>
                            </td>

                            <td>
                                <form action="{{route('listings.destroy' , $listing->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i style="margin-right: 5px;" class="fa fa-trash"></i> Delete</button>
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



