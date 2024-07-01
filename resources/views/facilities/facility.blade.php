@extends('layouts.app')
@section('content')

<x-breadcrumb
    page-title="Our College Facilities"
    value1="Home"
    value2=""
    value3="Facilities"
/>
@php
     $contactDetails = [
        'address' => 'Andavar College of Nursing, 125/2a Main Road, Poravacherry Nagapattinam – 611108',
        'email' => 'principal@andavarcon.edu.in',
        'phone' => '04365 245600',
        'hours' => 'Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)'
    ];
@endphp
<div class="site-main">


    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 widget-area sidebar-left">
                    <aside class="widget widget-nav-menu">
                        <ul>
                            <ul>
                                <ul>
                                    <li class="{{ Str::contains(Request::path(), 'classrooms') ? 'active' : '' }}">
                                        <a href="/facilities/classrooms" data-facility="classrooms"> Classrooms </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'preclinical-lab') ? 'active' : '' }}">
                                        <a href="/facilities/preclinical-lab" data-facility="preclinical-lab"> Pre Clinical Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'nursing-foundations-lab') ? 'active' : '' }}">
                                        <a href="/facilities/nursing-foundations-lab" data-facility="nursing-foundations-lab"> Nursing Foundations Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'community-health-nursing-lab') ? 'active' : '' }}">
                                        <a href="/facilities/community-health-nursing-lab" data-facility="community-health-nursing-lab"> Community Health Nursing Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'nutrition-lab') ? 'active' : '' }}">
                                        <a href="/facilities/nutrition-lab" data-facility="nutrition-lab"> Nutrition Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'maternity-child-health-lab') ? 'active' : '' }}">
                                        <a href="/facilities/maternity-child-health-lab" data-facility="maternity-child-health-lab"> Maternity and Child Health Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'computer-lab') ? 'active' : '' }}">
                                        <a href="/facilities/computer-lab" data-facility="computer-lab"> Computer Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'pediatric-lab') ? 'active' : '' }}">
                                        <a href="/facilities/pediatric-lab" data-facility="pediatric-lab"> Pediatric Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'auditorium') ? 'active' : '' }}">
                                        <a href="/facilities/auditorium" data-facility="auditorium"> Auditorium </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'library') ? 'active' : '' }}">
                                        <a href="/facilities/library" data-facility="library"> Library </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'admin-office') ? 'active' : '' }}">
                                        <a href="/facilities/admin-office" data-facility="admin-office"> Admin Office </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'transportation') ? 'active' : '' }}">
                                        <a href="/facilities/transportation" data-facility="transportation"> Transportation </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'sports-lab') ? 'active' : '' }}">
                                        <a href="/facilities/sports-lab" data-facility="sports-lab"> Sports Lab </a>
                                    </li>
                                    <li class="{{ Str::contains(Request::path(), 'av-aids-lab') ? 'active' : '' }}">
                                        <a href="/facilities/av-aids-lab" data-facility="av-aids-lab"> AV Aids Lab </a>
                                    </li>
                                </ul>

                            </ul>

                        </ul>
                    </aside>


                    <aside class="widget contact-widget with-title">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>{{ $contactDetails['address'] }}</li>
                            <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:{{ $contactDetails['email'] }}" target="_blank">{{ $contactDetails['email'] }}</a></li>
                            <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{ $contactDetails['phone'] }}</li>
                            <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>{!! $contactDetails['hours'] !!}</li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-8 content-area">
                    <div class="ttm-service-single-content-area">
                        @include("facilities.$facility")
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>


</div>

@endsection
