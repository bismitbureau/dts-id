@extends('layouts.main')

@section('content')


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3 f-futura">DTS INDONESA FEB UI</h1>
        <p class="lead justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum blanditiis suscipit
            nulla praesentium facere illum dicta tempore ipsa ipsam quia dignissimos, impedit sunt earum voluptates
            temporibus reprehenderit quod. Ullam dicta similique dolorem ex hic mollitia quia corrupti qui et deleniti
            neque nam iusto omnis corporis enim, rem suscipit voluptatibus obcaecati veritatis consequatur? Fugit
            blanditiis facilis sed laudantium et libero illum consequuntur alias unde! Enim, modi ratione cumque
            debitis quasi doloribus iure quibusdam iusto perspiciatis itaque illo sequi quod officia laborum id, iste
            dolore ipsam. Aperiam eaque perspiciatis sed expedita minus vero enim dolor! Molestiae ut quasi iste,
            laboriosam eum odio?</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
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
