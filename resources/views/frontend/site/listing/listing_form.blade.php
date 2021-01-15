@extends('frontend.master.app-site')

@section('title','Add New Listing')

@section('content')

<div class="wrapper">
	<div class="preloader"></div>

     <!-- start menu -->
       @include('backend.layouts.menu')
     <!-- end menu -->

<!-- strat to rent -->
<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
    <!-- start container fluid -->
    <div class="container-fluid ovh">
        <!-- start row 1 -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-lg-12 col-xl-12 maxw100flex-992 py-0">
                <!-- start row -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="breadcrumb_content style2">
                            <h2 class="breadcrumb_title">Send Your Request Listing To <span class="text-danger">amsimmo</span> admin</h2>
                        </div>
                    </div>

                    <!--  start form -->
                    <form action="" method="post">
                      @csrf
                    <!-- start col md 12 body -->
                    <div class="col-lg-12">

                         <!-- start details informaion -->
                         <div class="my_dashboard_review mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb30">Listing details :</h4>
                                </div>

                                <!-- start name , email , mobile -->
                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="mobile">Mobile</label>
                                        <input name="mobile" type="text" class="form-control" id="mobile">
                                    </div>
                                </div>
                                 <!-- start name , email , mobile -->

                                 <!-- start title , descriptin  -->
                                 <div class="col-lg-6">
                                    <div class="my_profile_setting_textarea">
                                        <label for="title">Title</label>
                                        <textarea name="title" class="form-control" id="title" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my_profile_setting_textarea">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" rows="7"></textarea>
                                    </div>
                                </div>
                                 <!-- end title , description -->

                                 <!--start category , city , area  -->
                                 <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="Status1">1</option>
                                            <option data-tokens="Status2">2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>City</label>
                                        <select name="City" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="Status1">1</option>
                                            <option data-tokens="Status2">2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label>Area</label>
                                        <select name="area" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="Status1">1</option>
                                            <option data-tokens="Status2">2</option>
                                        </select>
                                    </div>
                                </div>
                                 <!-- end category , city , area -->

                                 <!-- start price , space -->
                                 <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="price">Price</label>
                                        <input name="price" type="text" class="form-control" id="price">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="space">Space</label>
                                        <input name="space" type="text" class="form-control" id="space">
                                    </div>
                                </div>
                                 <!-- end price , space -->

                                 <!-- start type , measure , photos -->
                                 <div class="col-lg-4 col-xl-6">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="type">Listing Type</label>
                                        <select name="type" class="selectpicker" id="type" data-live-search="true" data-width="100%">
                                            <option data-tokens="bay">Buy</option>
                                            <option data-tokens="rent">Rent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-6">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="measure">Listing Measure</label>
                                        <select name="measure" class="selectpicker" id="measure" data-live-search="true" data-width="100%">
                                            <option data-tokens="m²">m²</option>
                                            <option data-tokens="hectar">Hectar</option>
                                        </select>
                                    </div>
                                </div>

                                 <!-- end type , measure , photos -->

                                  <!-- start images -->
                                  <div class="col-xl-12 text-center">
                                        <div class="portfolio_upload">
                                            <input type="file" name="myfile" />
                                            <div class="icon"><span class="flaticon-download"></span></div>
                                            <p>Drag and drop images here</p>
                                        </div>
                                  </div>
                              <!-- end images -->

                              <!-- start button submit -->
                              <div class="col-xl-12">
                                <div class="my_profile_setting_input">
                                    <button type="submit" class="btn btn2 float-right">Send Listing</button>
                                </div>
                            </div>
                              <!-- end button submit -->

                    </div>
                    <!-- end col md 12 body -->

                    </form>
                    <!-- end form -->


                </div>
                 <!-- end row -->

                <div class="row mt50">
                    <div class="col-lg-12">
                        <div class="copyright-widget text-center">
                            <p>© 2020 Amsimmo. Made with love.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row 1 -->
    </div>
    <!-- end container fluid -->
</section>

<!-- end to rent -->

@stop
