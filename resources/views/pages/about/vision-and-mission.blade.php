@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Vision and Mission"
value1="Home"
value2="About"
value3="Vision and Mission"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'Vision and Mission', 'url' => Request::path()],
                    ['title' => 'Message From the Chairman', 'url' => '/about/message-from-the-founder-and-chairman'],
                    ['title' => 'Message From the Principal', 'url' => '/about/message-from-the-principal'],
                    ['title' => 'Message From the Secretary', 'url' => '/about/message-from-the-secretary'],
                    ['title' => 'History', 'url' => '/about/history'],

                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Our Vision - Andavar Nursing College</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/vision.webp')}}" alt="vision-1" height="100%" width="100%">
                                </div>
                            </div>
                            <div class="padding_top15 padding_bottom5">

                                <p class="text-justify">Our vision is to set the highest standards of excellence in nursing by fostering professional values, encouraging innovation in nursing practice, and advancing education and research. We are dedicated to cultivating a culture of continuous improvement and leadership in the nursing field, ensuring that our graduates are well-equipped to meet the evolving needs of healthcare and make a significant impact on patient care and the community.</p>

                            </div>

                        </div>
                    </div>
                    <div class="ttm-service-single-content-area mt-4">
                        <div class="ttm-service-description">
                            <h3>Our Mission - Andavar Nursing College</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/mission.webp')}}" alt="vision-1" height="100%" width="100%">
                                </div>
                            </div>
                            <div class="padding_top15 padding_bottom5">

                                <p class="text-justify">Our mission is to deliver exceptional education to the future leaders of the nursing profession, fostering both academic excellence and research in the field of nursing. We are committed to offering top-quality nursing education that emphasizes ethical values and aligns with global standards, ensuring our graduates are well-prepared to meet the challenges and opportunities in healthcare.</p>

                            </div>

                        </div>
                    </div>
                </div>


            </div><!-- row end -->
        </div>
    </div>


</div>

@endsection
