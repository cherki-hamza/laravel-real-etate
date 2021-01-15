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
                <h2 class="text-success">{{__('dashboard.ALL_CONTACTS')}}</h2>
                <div class="box-body">
                <table {{(LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''}} class="table table-bordered table-hover responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>{{__('dashboard.User')}} {{' '}}{{__('dashboard.Image')}}</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('dashboard.email')}}</th>
                        <th>{{__('dashboard.Mobile')}}</th>
                        <th>{{__('dashboard.Subject')}}</th>
                        <th>{{__('dashboard.Message')}}</th>
                        <th class="bg-success">{{__('dashboard.Show')}}</th>
                        <th class="bg-danger">{{__('dashboard.Delete')}}</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>
                                    <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($contact->getGravatar())}}" alt="{{$contact->name}}">
                                </td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->tel}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td class="text-center"><a href="{{route('contact.show',$contact->id)}}"><span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye"></i>Show</span></a></td>
                                <td class="text-center"> <form action="{{route('contact.destroy' , $contact->id)}}" method="post">
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



