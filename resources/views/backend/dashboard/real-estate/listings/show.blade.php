@extends('backend.master.app-dashboard')

@section('title' , 'show Listing')

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
                        <span class="text-primary">show Listing : </span>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
               <a href="{{route('listings.edit' , $listing->id)}}"> <span class="btn btn-success"> Edit Listing</span></a>
               </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-12 -->
               <div class="col-md-12">

                <div class="box">
                    <span>    @include('backend.alert.alert') </span>
                 {{--  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                         show Listing
                      </h3>
                  </div> --}}

                     <div class="row">

                        <!-- start 1 col-md-6 -->
                        <div class="col-md-6">
                            <div class="box-body">
                             <div class="box box-primary">
                                 <div class="box-header with-border">
                                   <h3>Listing Title :</h3>
                                   <h2 class="box-title text-danger">{!!$listing->handel_listing_title() !!}</h2>
                                   <h4><i class="fa fa-info margin-r-5"></i>Réference :</h4>
                                   <p><span class="text-danger">Réf : </span> {{$listing->ref}}</p>
                                 </div>
                                 <!-- /.box-header -->
                                 <div class="box-body">
                                   <strong><i class="fa fa-book margin-r-5"></i> Description :</strong>

                                   <p class="text-muted">
                                    {!!$listing->handel_listing_Desc() !!}
                                   </p>

                                   <hr>

                                   <strong><i class="fa fa-map-marker margin-r-5"></i> Location :</strong>

                                   <p class="text-muted">City : {{$listing->handel_listing_city()}}</p>
                                   <p class="text-muted">Area : {{$listing->handel_listing_area()}}</p>

                                   <strong><i class="fa fa-info margin-r-5"></i>Listing Type , Price , Measure :</strong>

                                   <p class="text-muted">Type : {{$listing->type_listing}}</p>
                                   <p class="text-muted">Price : {{$listing->handel_Price()}}</p>
                                   <p class="text-muted">Space : {{$listing->space}} : <strong>{{$listing->measure}}</strong></p>


                                   <hr>

                                   <strong><i class="fa fa-pencil margin-r-5"></i> Listing Informations :</strong>

                                   <p>
                                     <span class="label label-danger">Type : {{$listing->type_listing}}</span>
                                     <span class="label label-success">Price : {{$listing->handel_Price()}}</span>
                                     <span class="label label-info">Space : {{$listing->space}} : <strong>{{$listing->measure}}</strong></span>
                                     <span class="label label-warning">Price : {{$listing->price}}</span>
                                   </p>

                                   <hr>

                                   <strong><i class="fa fa-file-text-o margin-r-5"></i>More Informations :</strong>

                                   <p>{!! $listing->handel_listing_More_info() !!}</p>
                                 </div>
                                 <!-- /.box-body -->
                               </div>
                            </div>
                         </div>
                         <!--  end 1 col-md-6 -->

                         <!-- start 2 col-md-6 -->
                         <div class="col-md-6">
                             <!-- start box 1 -->
                             <div style="margin-top: 6px;" class="box box-primary">
                               {{-- <div class="box-header with-border">

                               </div> --}}
                               <!-- /.box-header -->
                               <!-- start box -->
                               <div class="box-body">

                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                   <ol class="carousel-indicators">
                                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                   </ol>

                                   <div class="carousel-inner">

                                     @foreach (json_decode($listing->images) as $img)
                                     <div class="item {{($loop->first)? 'active':''}}">

                                            <img style="width: 900px;height: 500px;"  src="{{asset('public/'.$img)}}" alt="listings">

                                       <div class="carousel-caption">
                                         <span class="text-whit">{!!$listing['en_title'] !!}</span>
                                       </div>
                                     </div>
                                     @endforeach


                                   </div>

                                   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                     <span class="fa fa-angle-left"></span>
                                   </a>
                                   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                     <span class="fa fa-angle-right"></span>
                                   </a>

                                 </div>
                               </div>
                               <!-- /.box-body -->
                             </div>
                             <!-- /.box -->
                             <!-- end box 1 -->

                             <!-- start box 2 -->
                             <div style="margin-top: 6px;" class="box box-primary">
                                 <div class="box-header with-border">
                                    <strong><i class="fa fa-map-marker margin-r-5"></i>Map Location :</strong>
                                </div>
                                <!-- /.box-header -->
                                <!-- start box -->
                                    <div class="box-body text-center">
                                      {!! $listing->map !!}
                                    </div>
                                </div>
                                <!-- /.box-body -->
                              </div>
                             <!-- start box 2 -->

                           </div>
                         <!-- end 2 col-md-6 -->


                     </div>


                 </div>
              </div>
              <!-- end div 1 col-md-12 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



