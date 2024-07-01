<!-- resources/views/components/footer.blade.php -->
<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="d-sm-flex align-items-center">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-fluid auto_size" height="auto" width="auto" src="{{asset('images/logo-white.svg')}}" alt="Andavar Nursing College">
                            </div>
                            <div class="textwidget widget-text">
                                <p>Andavar Nursing College is committed to providing quality education and fostering the development of healthcare professionals.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text margin_right10 clearfix">
                        <h3 class="widget-title">Have any Questions?</h3>
                        <div class="textwidget widget-text">
                            <div class="call_detail">
                                <h3 class="fs-24"><a href="tel:+917373503030">(+91) 7373 503 030</a></h3>
                                <h3 class="fs-24"><a href="tel:+919842404050">(+91) 9842 404 050</a></h3>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul id="menu-footer-quick-links" class="menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('facility') }}">Facility</a></li>
                            <li><a href="{{ url('academics') }}">Academics</a></li>
                            <li><a href="{{ url('department') }}">Department</a></li>
                            <li><a href="{{ url('circular') }}">Circular</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Important Links</h3>
                        <ul id="menu-footer-quick-links" class="menu">
                            <li><a href="{{ url('/') }}">AntiRagging</a></li>
                            <li><a href="{{ url('about-us') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('facility') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('academics') }}">Blog & Articles</a></li>
                            <li><a href="{{ url('department') }}">Department</a></li>
                            <li><a href="{{ url('circular') }}">Gallery & Media</a></li>

                            <li><a href="{{ url('department-login') }}">Department Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_contact clearfix">
                        <h3 class="widget-title">Contact Us</h3>
                        <ul class="widget_contact_wrapper">
                            <li><i class="ttm-textcolor-skincolor fa fa-map-marker"></i> Andavar College of Nursing, 125/2a Main Road, Poravacherry Nagapattinam – 611108</li>
                            <li><i class="ttm-textcolor-skincolor fa fa-phone"></i> 04365 245600</li>
                            <li><i class="ttm-textcolor-skincolor fa fa-envelope-o"></i> <a href="mailto:principal@andavarcon.edu.in">principal@andavarcon.edu.in</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom-footer-text copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <span class="cpy-text">Copyright © 2017 - {{ date('Y') }} <a href="#" class="ttm-textcolor-skincolor font-weight-500">Andavar Nursing College</a> All rights reserved.</span>
                        <ul class="footer-nav-menu">
                            <li><a href="{{ url('about-us') }}">Powered by Bumble Bees IT Solutions</a></li>
                            {{-- <li><a href="{{ url('contact-us') }}">Contact Us</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
