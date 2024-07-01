@php
$facilities = [
    ['title' => 'Library', 'image' => 'images/facility/lib.webp', 'url' => 'facilities/library'],
    ['title' => 'Auditorium', 'image' => 'images/facility/auditorium.webp', 'url' => 'facilities/auditorium'],
    ['title' => 'Pre Clinical Lab', 'image' => 'images/facility/pcl.webp', 'url' => 'facilities/preclinical-lab'],
    ['title' => 'Nursing Foundations Lab', 'image' => 'images/facility/nfl.webp', 'url' => 'facilities/nursing-foundations-lab'],
    ['title' => 'Community Health Nursing Lab', 'image' => 'images/facility/chnl.webp', 'url' => 'facilities/community-health-nursing-lab'],
    ['title' => 'Maternity and Child Health Nursing Lab', 'image' => 'images/facility/mchnl.webp', 'url' => 'facilities/maternity-child-health-lab'],
    ['title' => 'Nutrition Lab', 'image' => 'images/facility/nl.webp', 'url' => 'facilities/nutrition-lab'],
    ['title' => 'Computer Lab', 'image' => 'images/facility/cl.webp', 'url' => 'facilities/computer-lab'],
    ['title' => 'Pediatric Lab', 'image' => 'images/facility/pl.webp', 'url' => 'facilities/pediatric-lab'],
    ['title' => 'Admin Office', 'image' => 'images/facility/ao.webp', 'url' => 'facilities/admin-office'],
    ['title' => 'Transportation', 'image' => 'images/facility/tra.webp', 'url' => 'facilities/transportation'],
    ['title' => 'Sports Lab', 'image' => 'images/facility/sl.webp', 'url' => 'facilities/sports-lab'],
    ['title' => 'AV Aids Lab', 'image' => 'images/facility/aval.webp', 'url' => 'facilities/av-aids-lab'],
];
@endphp

<section class="ttm-row services-section ttm-bgcolor-grey clearfix" style="padding-top: 10px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="padding_top75 res-991-padding_top0"></div>
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>FACILITIES</h3>
                        <h2 class="title text-gradient gradient-1">Our <b>Facilities & Infrastructure</b></h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row -->
        <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
            @foreach($facilities as $facility)
            <div class="col-md-4 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="{{ asset($facility['image']) }}" alt="{{ $facility['title'] }}">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3>{{ $facility['title'] }}</h3>
                        </div>
                        <div class="ttm-details-link">
                            <a href="{{url($facility['url'])}}" tabindex="0"><i class="themifyicon ti-arrow-top-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            @endforeach
        </div><!-- row end -->
    </div>
</section>
