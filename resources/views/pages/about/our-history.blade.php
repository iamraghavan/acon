@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="History of Andavar College of Nursing"
value1="Home"
value2="About"
value3="History"
/>

@php
$menuItems = [
    ['title' => 'Vision and Mission', 'url' => '/about/vision-and-mission'],
    ['title' => 'Message From the Chairman', 'url' => '/about/message-from-the-founder-and-chairman'],
    ['title' => 'Message From the Secretary', 'url' => '/about/message-from-the-secretary'],
    ['title' => 'Message From the Principal', 'url' => '/about/message-from-the-principal'],
    ['title' => 'History', 'url' => Request::path()],

];

@endphp


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
                    ['title' => 'Message From the Principal', 'url' => '/about/message-from-the-principal'],
                    ['title' => 'History', 'url' => Request::path()],

                ];

                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Andavar College Of Nursing - History</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/slides/s1.webp')}}" alt="History-1" height="100%" width="100%">
                                </div>
                            </div>
                            <div class="padding_top20 res-991-padding_top40">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">

                                        <h2 class="title">History of Andavar College of Nursing</b></h2>
                                    </div>
                                    <div class="title-desc text-justify">
                                        <p>Andavar College of Nursing was established with the vision of becoming a premier institution dedicated to the education and professional development of nursing students. Located in the heart of Nagapattinam, the college was founded to address the growing need for skilled healthcare professionals in the region. Over the years, the college has grown significantly, expanding its facilities and academic programs to accommodate the increasing number of students seeking a career in nursing.
                                        </p><p>
                                            From its inception, Andavar College of Nursing has focused on providing a comprehensive education that combines rigorous academic coursework with practical, hands-on experience. The college prides itself on a faculty of experienced educators and healthcare professionals who are committed to the personal and professional growth of their students.
                                        </p><p>
                                            The institution has built strong partnerships with local hospitals and healthcare providers, offering students valuable opportunities for clinical practice and community service. These collaborations ensure that graduates are not only well-prepared for their roles in healthcare but also deeply connected to the communities they will serve.</p>
                                    </div>
                                    <div class="title-header">

                                        <h2 class="title">Accreditation Status</b></h2>
                                    </div>
                                    <div class="title-desc text-justify">
                                        <p>
                                            Andavar College of Nursing is accredited by the Indian Nursing Council (INC) and is affiliated with the Tamil Nadu Dr. M.G.R. Medical University. These accreditations affirm the college's commitment to maintaining high standards in nursing education. The curriculum is designed to meet the stringent requirements set by these bodies, ensuring that students receive education that is both comprehensive and up-to-date with current healthcare practices and standards.
                                        </p><p>
In addition to national accreditation, the college continuously strives to enhance its programs and facilities, aiming for recognition by other reputable educational and healthcare institutions globally. The commitment to excellence in education and adherence to rigorous standards has positioned Andavar College of Nursing as a respected and sought-after institution for nursing education in the region.






</p>
                                    </div>
                                </div><!-- section title end -->

                            </div>

                            <div class="padding_top20 res-991-padding_top40">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="client-box">
                                            <div class="ttm-client-logo-tooltip" data-tooltip="Indian Nursing Council (INC)">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid auto_size" width="160" height="98" src="https://upload.wikimedia.org/wikipedia/en/b/b0/Indian_Nursing_Council_Logo.png" alt="Indian Nursing Council (INC) logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="client-box">
                                            <div class="ttm-client-logo-tooltip" data-tooltip="Tamil Nadu Dr. M.G.R. Medical University">
                                                <div class="client-thumbnail">
                                                    <img class="img-fluid auto_size" width="160" height="98" src="https://upload.wikimedia.org/wikipedia/en/e/e9/Tamil_Nadu_Dr._M.G.R._Medical_University_logo.png" alt="Tamil Nadu Dr. M.G.R. Medical University logo">
                                                </div>
                                            </div>
                                        </div>
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

<section class="ttm-row client-section ttm-bgcolor-grey clearfix">
    <div class="container">
       <!--row -->

       <!-- row end -->
    </div>
 </section>

@endsection
