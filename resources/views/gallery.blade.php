@extends('layouts.main')

@section('content')

<div class="container pt-4">
    <h2 class="font-weight-bold">Gallery</h2>
    <div id="asset" class="mt-2 mb-5"></div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy1.jpg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy2.jpeg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy3.jpg') }}" alt="" class="img-fluid rounded img-gallery">                
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy4.jpeg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy4.jpeg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy3.jpg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy2.jpeg') }}" alt="" class="img-fluid rounded img-gallery">                
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 p-3 pb-5 mb-3">
            <img src="{{ asset('images/gallery/dumy1.jpg') }}" alt="" class="img-fluid rounded img-gallery">
        </div>
    </div>
</div>

@endsection
