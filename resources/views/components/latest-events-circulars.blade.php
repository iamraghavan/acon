<section class="ttm-row blog-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title style2">
                    <div class="title-header">
                        <h2 class="title">Latest <b>Events and Circulars</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            @forelse ($events as $event)
                <div class="col-lg-4">
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ url($event['image']) }}" alt="" height="100%" width="100%">
                        </div>
                        <div class="featured-content">
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="{{ $event['created_at'] }}">{{ \Carbon\Carbon::parse($event['created_at'])->format('d') }}<span class="entry-month entry-year">{{ \Carbon\Carbon::parse($event['created_at'])->format('M') }}</span></time>
                                </span>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline">{{ $event['author'] }}</span>
                                <span class="ttm-meta-line comments-link">{{ $event['comments_count'] }} Comments</span>
                            </div>
                            <div class="post-title">
                                <h5><a href="{{ url($event['url']) }}">{{ $event['title'] }}</a></h5>
                            </div>
                            <div class="post-description">
                                <p>{{ $event['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No events found.</p>
            @endforelse
    </div>
</section>
