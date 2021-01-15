<?php $__env->startSection('title','To Rent'); ?>

<?php $__env->startSection('content'); ?>


<div class="wrapper">
	<div class="preloader"></div>

     <!-- start menu -->
       <?php echo $__env->make('backend.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- end menu -->

<!-- strat to rent -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="breadcrumb_content style2 mb0-991">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active text-thm" aria-current="page">Simple Listing – Grid View</li>
                </ol>
                <h2 class="breadcrumb_title">Simple Listing – Grid View</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="listing_list_style mb20-xsd tal-991">
                <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
                </ul>
            </div>
            <div class="dn db-991 mt30 mb0">
                <div id="main2">
                    <span id="open2" class="flaticon-filter-results-button filter_open_btn style2"> Show Filter</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-8">
            
            <div class="row">
                <div class="grid_list_search_result">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                        <div class="left_area tac-xsd">
                            <p>9 Search results</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                        <div class="right_area text-right tac-xsd">
                            <ul>
                                <li class="list-inline-item"><span class="stts">Status:</span>
                                    <select class="selectpicker show-tick">
                                        <option>All Status</option>
                                        <option>Recent</option>
                                        <option>Old Review</option>
                                    </select>
                                </li>
                                <li class="list-inline-item"><span class="shrtby">Sort by:</span>
                                    <select class="selectpicker show-tick">
                                        <option>Featured First</option>
                                        <option>Featured 2nd</option>
                                        <option>Featured 3rd</option>
                                        <option>Featured 4th</option>
                                        <option>Featured 5th</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Apartment</p>
                                <h4>Renovated Apartment</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item dn"></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Villa</p>
                                <h4>Gorgeous Villa Bay View</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Sale</a></li>
                                    <li class="list-inline-item dn"></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Single Family Home</p>
                                <h4>Luxury Family Home</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Apartment</p>
                                <h4>Luxury Family Home</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp15.jpg" alt="fp15.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp16.jpg" alt="fp16.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Apartment</p>
                                <h4>Renovated Apartment</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feat_property home7 style4">
                        <div class="thumb">
                            <div class="fp_single_item_slider">
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp16.jpg" alt="fp16.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-whp" src="images/property/fp17.jpg" alt="fp17.jpg">
                                </div>
                            </div>
                            <div class="thmb_cntnt style2">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item dn"></li>
                                </ul>
                            </div>
                            <div class="thmb_cntnt style3">
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Villa</p>
                                <h4>Gorgeous Villa Bay View</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <div class="fp_pdate float-right">4 years ago</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt20">
                    <div class="mbp_pagination">
                        <ul class="page_navigation">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">29</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xl-4">
            <div class="sidebar_listing_grid1 dn-991">
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <h4 class="title mb25">Mortgage Calculator</h4>
                        <ul class="sasw_list mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Total Amount">
                                    <label for="exampleInputName1"><span class="flaticon-money-bag"></span></label>
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Down Payment">
                                    <label for="exampleInputAmount"><span class="flaticon-money-bag"></span></label>
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputAmount2" placeholder="Interest Rate">
                                    <label for="exampleInputAmount2"><span class="flaticon-percent"></span></label>
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputYear" placeholder="Loan Term (Years)">
                                    <label for="exampleInputYear"><span class="flaticon-calendar"></span></label>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Monthly</option>
                                            <option>Weekly</option>
                                            <option>Yearly</option>
                                            <option>Daily</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button style2">
                                    <button type="submit" class="btn btn-block btn-thm">Search</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="terms_condition_widget">
                    <h4 class="title">Categories Property</h4>
                    <div class="widget_list">
                        <ul class="list_details">
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar_feature_listing">
                    <h4 class="title">Recently Viewed</h4>
                    <div class="media">
                        <img class="align-self-start mr-3" src="images/blog/fls1.jpg" alt="fls1.jpg">
                        <div class="media-body">
                            <h5 class="mt-0 post_title">Nice Room With View</h5>
                            <a href="#">$13,000/<small>/mo</small></a>
                            <ul class="mb0">
                                <li class="list-inline-item">Beds: 4</li>
                                <li class="list-inline-item">Baths: 2</li>
                                <li class="list-inline-item">Sq Ft: 5280</li>
                            </ul>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="images/blog/fls2.jpg" alt="fls2.jpg">
                        <div class="media-body">
                            <h5 class="mt-0 post_title">Villa called Archangel</h5>
                            <a href="#">$13,000<small>/mo</small></a>
                            <ul class="mb0">
                                <li class="list-inline-item">Beds: 4</li>
                                <li class="list-inline-item">Baths: 2</li>
                                <li class="list-inline-item">Sq Ft: 5280</li>
                            </ul>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="images/blog/fls3.jpg" alt="fls3.jpg">
                        <div class="media-body">
                            <h5 class="mt-0 post_title">Sunset Studio</h5>
                            <a href="#">$13,000<small>/mo</small></a>
                            <ul class="mb0">
                                <li class="list-inline-item">Beds: 4</li>
                                <li class="list-inline-item">Baths: 2</li>
                                <li class="list-inline-item">Sq Ft: 5280</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

<!-- end to rent -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master.app-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/frontend/site/to-rent.blade.php ENDPATH**/ ?>