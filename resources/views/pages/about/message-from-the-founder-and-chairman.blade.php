@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Messge from the Founder and Chairman"
value1="Home"
value2="About"
value3="Message from the Founder and Chairman"
/>


<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'Vision and Mission', 'url' => '/about/vision-and-mission'],
                    ['title' => 'Message From the Chairman', 'url' => Request::path()],
                    ['title' => 'Message From the Principal', 'url' => '/about/message-from-the-principal'],
                    ['title' => 'Message From the Secretary', 'url' => '/about/message-from-the-secretary'],
                    ['title' => 'History', 'url' => '/about/history'],

                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Andavar College Of Nursing - Chairman</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/chariman.webp')}}" alt="Chairman-1" height="100%" width="100%">
                                </div>
                            </div>
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">

                                        <h2 class="title">Andavar College of Nursing - Chairman</b></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Wish you a happy and prosperous academic career for all the Parents, Students and the Faculty members of Andavar College of Nursing.
                                            I feel very proud of running this College of Nursing with the sincere and dedicated services of the teaching and non-teaching staff of this college. I wish and pray that everyone should remember,<span class="text-success" style="font-weight: 500"> "A burning candle alone can light another one" </span> as Rabindranath Tagore proclaimed, highlighting the importance of education in the nursing profession.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="d-flex align-items-center">

                                    <div class="d-inline-block padding_left30">
                                        <h2 class="fs-20 mb-0">Rtn.S.Natarajan M.Com,</h2>
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
