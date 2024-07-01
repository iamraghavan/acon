@extends('layouts.app')
@section('content')

<style>
    .gallery-folder {
        margin-bottom: 30px;
    }

    .gallery-folder h3 {
        margin-bottom: 20px;
    }

    .gallery-folder .row {
        margin-bottom: 10px;
    }

    .gallery-folder img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
</style>

<div class="container">
    <div class="gallery-folder">
        <h3>2021 Academic Year Gallery</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('/images/slides/s4.webp')}}" alt="Gallery Image 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{asset('/images/slides/s1.webp')}}" alt="Gallery Image 2" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2021/image3.jpg" alt="Gallery Image 3" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="path/to/2021/image4.jpg" alt="Gallery Image 4" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2021/image5.jpg" alt="Gallery Image 5" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2021/image6.jpg" alt="Gallery Image 6" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="gallery-folder">
        <h3>2022 Academic Year Gallery</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="path/to/2022/image1.jpg" alt="Gallery Image 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2022/image2.jpg" alt="Gallery Image 2" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2022/image3.jpg" alt="Gallery Image 3" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="path/to/2022/image4.jpg" alt="Gallery Image 4" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2022/image5.jpg" alt="Gallery Image 5" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="path/to/2022/image6.jpg" alt="Gallery Image 6" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@endsection
