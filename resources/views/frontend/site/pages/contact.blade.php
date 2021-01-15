@extends('frontend.master.app-site')

@section('title','Contact')

@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('site.home')}}">Contact</a></li>
                    </ol>
                    <h4 class="breadcrumb_title">Contact Us</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Contact -->
<section class="our-contact pb0 bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="form_grid">
                       <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                   <!-- end alert -->
                    <h4 class="mb5">Send Us An Email</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. Maecenas mattis enim at arcu feugiat, sit amet blandit nisl iaculis. Donec lacus odio, malesuada eu libero sit amet, congue aliquam leo. In hac habitasse platea dictumst.</p>

                    <form class="contact_form"  action="{{route('site.contact.store')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" name="name" class="form-control"  type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control required email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="tel" name="tel" class="form-control required phone"  type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="subject" name="subject" class="form-control required"  type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control required" rows="8"  placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button type="submit" class="btn btn-lg btn-thm">Send Message</button>
                                   {{--  <input class="btn btn-lg btn-thm" type="submit" value="Send Message"> --}}
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact_localtion">
                    <h4>Contact Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst.</p>
                    <div class="content_list">
                        <h5>Address</h5>
                        <p>2301 Ravenswood Rd Madison, <br>WI 53711</p>
                    </div>
                    <div class="content_list">
                        <h5>Phone</h5>
                        <p>(315) 905-2321</p>
                    </div>
                    <div class="content_list">
                        <h5>Mail</h5>

                        <p><a href="" class="__cf_email__" >cherki0hamza@gmail.com</a></p>

                    </div>
                    <div class="content_list">
                        <h5>Skype</h5>
                        <p>findhouse.com</p>
                    </div>
                    <h5>Follow Us</h5>
                    <ul class="contact_form_social_area">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p0 mt50">
        <div class="row">
            <div class="col-lg-12">
                <div class="h600" id="map-canvas"></div>
            </div>
        </div>
    </div>
</section>

<!-- Start Partners -->
<section class="start-partners bgc-thm pt50 pb50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="start_partner tac-smd">
                    <h2>Become a Real Estate Agent</h2>
                    <p>We only work with the best companies around the globe</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="parner_reg_btn text-right tac-smd">
                    <a class="btn btn-thm2" href="#">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
