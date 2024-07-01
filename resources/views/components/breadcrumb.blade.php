<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">{{ $pageTitle }}</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        @if($value1)
                        <span>
                            <a title="{{ $value1 }}">{{ $value1 }}</a>
                        </span>
                        @endif
                        @if($value2)
                        <span>
                            <a title="{{ $value2 }}">{{ $value2 }}</a>
                        </span>
                        @endif
                        @if($value3)
                        <span>
                            <a title="{{ $value3 }}">{{ $value3 }}</a>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
