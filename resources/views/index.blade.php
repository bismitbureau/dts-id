@extends('layouts.main')

@section('content')


<div class="parallax_home img-fluid">
    <div class="w3-container home-transparent">
        <br>
        <br>
        <h1 class="text-center big">DTS INDONESIA</h1>
        <br>
        <h3 class="text-center">Working Towards a Brighter Future</h3>
    </div>

</div>

<div class="content-1">
    <div id="container-1">
        <h1>DTS INDONESIA AT A GLANCE</h1>
        <br>
        <h6 style=" text-transform: none; font-weight: bold;">A Bit of Background</h6>
        <h6 style="padding-top:10px;line-height:2;text-transform: none; max-width: 50%; margin-right:auto; margin-left: auto;">Here at DTS Indonesia, we are driven by a single goal; to do our part in making the world a better place for all. Our decision making process is informed by comprehensive empirical studies and high quality data evaluation. We strive to build productive relationships and make a positive impact with all of our pursuits.</h6>
    </div>
</div>
<div class="parallax"></div>
<div class="jumbotron jumbotron-fluid">
</div>
<section>
    <h1 class="text-center title f-futura">Our people</h1><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <figure class="zone center">
                <img src="{{ asset('images/bod/dummy-bod.jpg') }}" alt="" width="100%" class="img-responsive img-rounded">
                <figcaption> 
                </figcaption> 
            </figure>
        </div>
    </div>
    <br>    
    <div class="text-center">
        <a href="/board-of-directors" class="btn btn-primary">Meet our people</a>
    </div>
</section>

{{-- <section>
    <h1 class="text-center">Title</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatum odio quidem minima fuga nesciunt
        asperiores consectetur totam, assumenda cupiditate repellendus tempore odit quas sint ut. Perferendis sequi
        obcaecati sit ducimus impedit, repellat quibusdam quo reiciendis, quam sapiente voluptate possimus accusamus
        asperiores quia laborum voluptatem ipsa consequatur autem eveniet error.</p>
</section> --}}

@endsection
