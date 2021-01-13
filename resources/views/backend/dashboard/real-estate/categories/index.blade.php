@extends('backend.master.app-dashboard')

@section('title' , 'All Categories')

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
                        <span class="text-primary">All Categories : </span>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
               <a href="{{route('categories.create')}}"> <span class="btn btn-primary">Add New Category</span></a>
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
                <h2 class="text-success">all categories</h2>
                <div class="box-body">
                <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>Category Image</th>
                        <th>English Title</th>
                        <th>Fransh Title</th>
                        <th>Spain Title</th>
                        <th>Arabic Title</th>
                        <th class="bg-info">Edit</th>
                        <th class="bg-danger">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                        <tr class="">
                            <td>{{$cat->id}}</td>
                            <td>
                                <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($cat->photo())}}" alt="{{$cat->en_title}}">
                            </td>
                            <td>{{$cat->en_title}}</td>
                            <td>{{$cat->fr_title}}</td>
                            <td>{{$cat->es_title}}</td>
                            <td>{{$cat->ar_title}}</td>


                            <td><a href="{{route('categories.edit' , $cat->id)}}">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit "></i>Edit</span></a></td>

                            <td> <form action="{{route('categories.destroy' , $cat->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash"></i> Delete</button>
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


