@extends('layouts.app')
@section('content')
<x-breadcrumb
    page-title="Contact Our Staff"
    value1="Home"
    value2=""
    value3="Contact us"
/>
<div class="site-main">
    @if(session('success'))
    <script>
        // Display success message in an alert
        alert("{{ session('success') }}");
    </script>
@endif

    <!-- padding_bottom_zero-section -->
    <section class="ttm-row padding_bottom_zero-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-bgcolor-white box-shadow p-50">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">Contact <b>Form</b></h2>
                            </div>
                            <div class="title-desc">
                                <p>Feel free to contact us through <a class="ttm-textcolor-skincolor" href="#">Twitter</a> or <a class="ttm-textcolor-skincolor" href="#">Facebook</a> if you prefer.</p>
                            </div>
                        </div><!-- section title end -->
                        <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="name" type="text" value="{{ old('name') }}" placeholder="Name" required="required">
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Phone*" required="required">
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="email" type="email" value="{{ old('email') }}" placeholder="Email*" required="required">
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="address" type="text" value="{{ old('address') }}" placeholder="Address*" required="required">
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="street_address" type="text" value="{{ old('street_address') }}" placeholder="Street Address">
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input">
                                        <input name="address_line_2" type="text" value="{{ old('address_line_2') }}" placeholder="Address Line 2">
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-input">
                                        <input name="city" type="text" value="{{ old('city') }}" placeholder="City">
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-input">
                                        <input name="state" type="text" value="{{ old('state') }}" placeholder="State / Province / Region">
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-input">
                                        <input name="zip_code" type="text" value="{{ old('zip_code') }}" placeholder="ZIP / Postal Code">
                                    </span>
                                </div>
                                <div class="col-lg-12">
                                    <span class="text-input">
                                        <textarea name="inquiry" rows="5" placeholder="Inquiry">{{ old('inquiry') }}</textarea>
                                    </span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="pt-15 text-center">
                                        <p class="cookies padding_bottom20">
                                            <input id="cookies-consent" name="cookies-consent" type="checkbox" value="yes">
                                            <label for="cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send now!</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- padding_bottom_zero-section end -->


    <!--- conatact-section -->
    <section class="ttm-row conatact-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-xl-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.754456188793!2d79.8153302!3d10.7584642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a556ba31eb5572d%3A0xef91a038d7a3cd33!2sAndavar%20College%20of%20Education!5e0!3m2!1sen!2sin!4v1717953369191!5m2!1sen!2sin" width="100%" height="558"></iframe>
                </div>
                <div class="col-xl-7">
                    <div class="padding_left15 res-1199-padding_left0 padding_top20 res-1199-padding_top40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>CONTACT US</h3>
                                <h2 class="title">Get In <b>Touch!</b></h2>
                            </div>
                            <div class="title-desc">
                                <p>Fill out the form below and we will get back to you!</p>
                            </div>
                        </div><!-- section title end -->
                        <h2 class="fs-24 padding_top10">Head Office</h2>
                        <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom5"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="themifyicon ti-location-pin ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="margin_bottom0 fs-18">Address</h3>
                                        </div>
                                        <div class="featured-desc">Andavar College of Nursing, 125/2a Main Road, Poravacherry Nagapattinam – 611108</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="themifyicon ti-email ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="margin_bottom0 fs-18">Call Us / Email</h3>
                                        </div>
                                        <div class="featured-desc">04365 245600<br>andavarnsg@gmail.com</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                        <h2 class="fs-24 padding_top20">Principal Office</h2>
                        <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom5"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="themifyicon ti-email ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="margin_bottom0 fs-18">Email</h3>
                                        </div>
                                        <div class="featured-desc">principal@andavarcon.edu.in</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="themifyicon ti-mobile ttm-textcolor-skincolor"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="margin_bottom0 fs-18">Call Us</h3>
                                        </div>
                                        <div class="featured-desc">(+91) 7373 503 030 <br>
                                            (+91) 9842 404 050</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- conatact-section end -->





</div>
@endsection
