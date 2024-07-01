<section class="ttm-row padding_zero-section bg-img5 clearfix bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-eight ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor margin_top80 res-991-margin_top15 mb_90 res-991-margin_bottom15">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonials ttm-testimonial-box-view-style3">
                                    <div class="testimonial-content">
                                        <blockquote class="testimonial-text">{{ $testimonial['text'] }}</blockquote>
                                        <div class="testimonial-bottom">

                                            <div class="testimonial-caption">
                                                <h5>{{ $testimonial['name'] }}</h5>
                                                <label>{{ $testimonial['designation'] }}</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
