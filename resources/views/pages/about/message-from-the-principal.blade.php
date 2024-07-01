@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Messge From the Principal"
value1="Home"
value2="About"
value3="Message From the Principal"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'Vision and Mission', 'url' => '/about/vision-and-mission'],
                    ['title' => 'Message From the Chairman', 'url' => '/about/message-from-the-founder-and-chairman'],
                    ['title' => 'Message From the Secretary', 'url' => '/about/message-from-the-secretary'],
                    ['title' => 'Message From the Principal', 'url' => Request::path()],
                    ['title' => 'History', 'url' => '/about/history'],

                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Andavar College Of Nursing - Principal</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/principal.webp')}}" alt="Principal-1" height="50%" width="50%">
                                </div>
                            </div>
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">

                                        <h2 class="title text-gradient gradient-6">Andavar College of Nursing - Principal</h2>
                                    </div>
                                    <div class="title-desc text-justify">
                                        <p>As the Principal, it gives me great pleasure to welcome you all. Our college is dedicated to fostering excellence in nursing education, research, and practice.


                                            </p>
                                    </div>
                                    <div class="title-desc text-justify">
                                        <p>
                                            Here, we are committed to providing our students with a supportive learning environment, where they can develop the skills, knowledge, and compassion needed to excel as healthcare professionals. Our experienced faculty members are committed to providing a supportive learning environment and dedicated to helping students reach their full potential and make a positive impact in the healthcare industry.
                                            Whether you are considering joining our college as a student or faculty member, I encourage you to explore our website to learn more about our programs and achievements. Together, we can continue to make a positive impact on the health and well-being of individuals and communities.
                                            Thank you for visiting our College of Nursing website and we look forward to welcoming you into our community and empowering you to achieve your goals in the dynamic field of nursing.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="d-flex align-items-center">

                                    <div class="d-inline-block padding_left30">
                                        <label>Warm Regards,</label>
                                        <h2 class="fs-20 mb-0">Dr. P. Gomathi, M.Sc.,(N),Ph.D</h2>
                                        <label>Principal - Andavar College of Nursing</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div><!-- row end -->
        </div>
    </div>


</div>

@endsection
