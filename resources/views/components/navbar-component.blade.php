<div id="preloader" class="blobs-wrapper">
    <div class="ttm-bgcolor-skincolor loader-blob"></div>
</div>

@php
    $facilities = [
    ['title' => 'Library', 'url' => 'facilities/library'],
    ['title' => 'Auditorium', 'url' => 'facilities/auditorium'],
    ['title' => 'Pre Clinical Lab', 'url' => 'facilities/preclinical-lab'],
    ['title' => 'Nursing Foundations Lab', 'url' => 'facilities/nursing-foundations-lab'],
    ['title' => 'Community Health Nursing Lab', 'url' => 'facilities/community-health-nursing-lab'],
    ['title' => 'Maternity and Child Health Nursing Lab', 'url' => 'facilities/maternity-child-health-lab'],
    ['title' => 'Nutrition Lab', 'url' => 'facilities/nutrition-lab'],
    ['title' => 'Computer Lab', 'url' => 'facilities/computer-lab'],
    ['title' => 'Pediatric Lab', 'url' => 'facilities/pediatric-lab'],
    ['title' => 'Admin Office', 'url' => 'facilities/admin-office'],
    ['title' => 'Transportation', 'url' => 'facilities/transportation'],
    ['title' => 'Sports Lab', 'url' => 'facilities/sports-lab'],
    ['title' => 'AV Aids Lab', 'url' => 'facilities/av-aids-lab'],
];


@endphp


<!--header start-->
<header id="masthead" class="header ttm-header-style-02 clearfix">
    <div class="widget_header_wrapper ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- site-branding -->
                    <div class="site-branding ">
                        <a class="home-link" href="{{url('/')}}" title="Andavar College of Nursing" rel="home">
                            <img id="logo-img" class="img-fluid auto_size logo-img logo-fixed" src="{{asset('images/logo-white.svg')}}" alt="logo-img">
                        </a>
                    </div><!-- site-branding end -->
                </div>
                <div class="col-xl-6">
                    <!-- ttm-widget-header -->
                    <div class="ttm-widget_header d-flex flex-row align-items-center justify-content-end">
                        <!-- widget-info -->
                        <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                            <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-email-2"></i></div>
                            <div class="widget_content">
                                <p>Send Email</p>
                                <h3><a href="mailto:principal@andavarcon.edu.in" target="_blank" rel="noopener noreferrer">principal@andavarcon.edu.in</a></h3>
                            </div>
                        </div><!-- widget-info end -->

                        <!-- widget-info -->
                        <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                            <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-phone-call"></i></div>
                            <div class="widget_content">
                                <p>Have any Questions?</p>
                                <h3>(+91) 7373 503 030</h3>
                            </div>
                        </div><!-- widget-info end -->
                    </div><!-- ttm-widget-header end -->
                </div>
            </div>
        </div>
    </div>
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white ttm-textcolor-darkgrey">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="site-navigation-content d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <li class="mega-menu-item">
                                            <a href="{{url('/')}}" class="">Home</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">About</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{url('/about/vision-and-mission')}}">Vision and Mission</a></li>
                                                <li><a href="{{url('/about/message-from-the-founder-and-chairman')}}">Message From the Chairman</a></li>
                                                <li><a href="{{url('/about/message-from-the-principal')}}">Message From the Principal</a></li>
                                                <li><a href="{{url('/about/message-from-the-secretary')}}">Message From the Secretary</a></li>
                                                <li><a href="{{url('/about/history')}}">History</a></li>
                                                {{-- <li><a href="">Message From the Principal</a></li> --}}

                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Facility</a>
                                            <ul class="mega-submenu">
                                                @foreach($facilities as $facility)
                                                <li>
                                                    <a href="{{url($facility['url'])}}">{{$facility['title']}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/admissions')}}" class="">Admissions</a>
                                        </li>

                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Academics</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{url('/academics/nursing')}}">B.SC Nursing</a></li>
                                                <li><a href="{{url('/academics/diploma-general-nursing-midwifery')}}">DGNM</a></li>
                                                <li><a href="department/dgnm.html">ANM</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="" class="">Circular</a>
                                        </li>

                                        <li class="mega-menu-item">
                                            <a href="" class="">Events</a>
                                        </li>

                                        <li class="mega-menu-item">
                                            <a href="{{url('/contact')}}" class="">Contact</a>
                                        </li>


                                    </ul>
                                </nav>

                                <div class="header_extra d-flex flex-row align-items-center ml-auto">
                                    <a href="" class="ttm-btn ttm-btn-size-sm ttm-btn-style-fill ttm-btn-shape-square ttm-btn-color-dark">Login</a>

                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--header end-->
