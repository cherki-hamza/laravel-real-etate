<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one home4 navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{asset('public/frontend/frontend-assets/images/header-logo2.png')}}" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img style="width: 100px" height="46px" class="logo1 img-fluid" src="{{asset('public/assets-file/images/logo-ams-immo.jpg')}}" alt="amsimmo">
                {{-- <img class="logo2 img-fluid" src="{{asset('public/frontend/frontend-assets/images/header-logo2.png')}}" alt="header-logo2.png"> --}}
                <span>amsimmo</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">

                <li class="list-inline-item"><a href="{{route('site.home')}}"><span class="title">Home</span></a></li>
                <li class="list-inline-item"><a href="{{route('site.about')}}"><span class="title">About</span></a></li>
                <li class="list-inline-item"><a href="{{route('site.listings')}}"><span class="title">Listings</span></a></li>
                <li class="list-inline-item"><a href="{{route('site.sell')}}"><span class="title">To Sell</span></a></li>
                <li class="list-inline-item"><a href="{{route('site.rent')}}"><span class="title">To Rent</span></a></li>

                <li class="last">
                    <a href="{{route('site.contact')}}"><span class="title"><span class="title ">Contact</span></span></a>
                </li>

                <!-- start langs -->

                <li class="">
                    <a href="#"><span class="title">Langues</span></span></a>
                    <!-- Level Two-->
                    <ul class="sub-menu" style="">
                        <li><a href="index.html">Englais</a></li>
                        <li><a href="index2.html">Fransh</a></li>
                        <li><a href="index3.html">Spain</a></li>
                        <li><a href="index3.html">Arabic</a></li>
                    </ul>
                </li>

                <!-- end langs -->

                <li class="list-inline-item add_listing"><a href="{{route('site.listing.form')}}"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>

            </ul>
        </nav>
    </div>
</header>
<!-- Modal -->
<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body container pb20">
                  <div class="row">
                      <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                              </li>
                        </ul>
                      </div>
                  </div>
                <div class="tab-content container" id="myTabContent">
                      <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="col-lg-6 col-xl-6">
                              <div class="login_thumb">
                                  <img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
                              </div>
                          </div>
                          <div class="col-lg-6 col-xl-6">
                            <div class="login_form">
                                <form action="#">
                                    <div class="heading">
                                        <h4>Login</h4>
                                    </div>
                                    <div class="row mt25">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        <a class="btn-fpswd float-right" href="#">Lost your password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
                                </form>
                            </div>
                          </div>
                      </div>
                      <div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="col-lg-6 col-xl-6">
                              <div class="regstr_thumb">
                                  <img class="img-fluid w100" src="images/resource/regstr.jpg" alt="regstr.jpg">
                              </div>
                          </div>
                          <div class="col-lg-6 col-xl-6">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h4>Register</h4>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group ui_kit_select_search mb0">
                                        <select class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="SelectRole">Single User</option>
                                            <option data-tokens="Agent/Agency">Agent</option>
                                            <option data-tokens="SingleUser">Multi User</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                        <label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                    <p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
                                </form>
                            </div>
                          </div>
                      </div>
                </div>
              </div>
        </div>
    </div>
</div>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2 text-center">
                <img style="width: 70px" height="46px" class="nav_logo_img img-fluid mt20" src="{{asset('public/assets-file/images/logo-ams-immo.jpg')}}" alt="amsimmo">
                {{-- <img class="nav_logo_img img-fluid mt20" src="{{asset('public/frontend/frontend-assets/images/header-logo2.png')}}" alt="header-logo2.png"> --}}
                <span class="mt20">Amsimmo</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
               <li class="list-inline-item"><a href="{{route('site.home')}}">Home</a></li>
                <li class="list-inline-item"><a href="{{route('site.about')}}">About</a></li>
                <li class="list-inline-item"><a href="{{route('site.listings')}}">Listings</a></li>
                <li class="list-inline-item"><a href="{{route('site.sell')}}">To Sell</a></li>
                <li class="list-inline-item"><a href="{{route('site.rent')}}">To Rent</a></li>

                <li class="last">
                    <a href="{{route('site.contact')}}"><span class="title">Contact</span></a>
                </li>

                <!-- start langs -->

                <li class="">
                    <a href="#"><span class="title">Langues</span></span></a>
                    <!-- Level Two-->
                    <ul class="sub-menu" style="">
                        <li><a href="index.html">Englais</a></li>
                        <li><a href="index2.html">Fransh</a></li>
                        <li><a href="index3.html">Spain</a></li>
                        <li><a href="index3.html">Arabic</a></li>
                    </ul>
                </li>

                <!-- end langs -->

            <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="{{route('site.listing.form')}}"><span class="flaticon-plus"></span> Create Listing</a></li>

        </ul>
    </nav>
</div>



