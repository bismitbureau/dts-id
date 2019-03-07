@extends('layouts.main')

@section('content')


    <div class="container">
        <h1 class="f-futura">Board of Directors</h1>
        <hr>
        <div class="row mb-5">
            <div class="col-md-12">
                <h4 class="f-futura">Director</h4>
                <h5>Anis Baswedan, Msc, PhD</h5> 
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <img class="img-responsive bod" src="{{ asset('images/bod/dummy-bod.jpg') }}" alt="">
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis distinctio ullam esse ducimus tempore praesentium! Alias dolore molestias vitae corporis.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h4>Director</h4>
                <h5>Anis Baswedan, Msc, PhD</h5> 
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <img class="img-responsive bod" src="{{ asset('images/bod/dummy-bod.jpg') }}" alt="">
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis distinctio ullam esse ducimus tempore praesentium! Alias dolore molestias vitae corporis.</p>
            </div>
        </div>
    </div>

    

    <style>
        .bod {
            max-width: 150px;
        }
        h4 {
            font-family: "Futura";
        }
    </style>


@endsection

