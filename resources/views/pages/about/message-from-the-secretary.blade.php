@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Messge From the Secretary"
value1="Home"
value2="About"
value3="Message From the Secretary"
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
                    ['title' => 'Message From the Secretary', 'url' => Request::path()],
                    ['title' => 'Message From the Principal', 'url' => '/about/message-from-the-principal'],
                    ['title' => 'History', 'url' => '/about/history'],

                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Andavar College Of Nursing - Secretary</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/secretary.webp')}}" alt="Secretary-1" height="100%" width="100%">
                                </div>
                            </div>
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">

                                        <h2 class="title">Andavar College of Nursing - Secretary</b></h2>
                                    </div>
                                    <div class="title-desc text-justify">
                                        <p>Warm welcome to Parents and Students,
<br>
                                            Andavar College of Nursing run under the leadership and guidance of our beloved secretary R. Tamilselvi M. Com, who is a lady of kindness and dynamic approach. Our main aim to run a Nursing college is to promote care and service globally through best educational improvement in quality nursing education with International standard
                                            </p>
                                    </div>

                                </div><!-- section title end -->
                                <div class="d-flex align-items-center">

                                    <div class="d-inline-block padding_left30">
                                        <h2 class="fs-20 mb-0">R. Tamilselvi M. Com,</h2>
                                        <label>Wishing you all the best,</label>
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
