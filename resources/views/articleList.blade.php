@extends('layouts.main')

@section('content')
{{-- Carousel --}}
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <img class="d-block w-100 cover img-fluid half-screen"  src="{{ asset('images/article/cover.jpg') }}" alt="First slide">
            <a href="/article/1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>INI JUDUL DARI SEBUAH ARTICLE 1</h3>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 cover img-fluid half-screen"  src="{{ asset('images/article/cover.jpg') }}" alt="Second slide">
            <a href="/article/1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>INI JUDUL DARI SEBUAH ARTICLE 2</h3>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 cover img-fluid half-screen"  src="https://via.placeholder.com/1920x720" alt="Third slide">
            <a href="/article/1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>INI JUDUL DARI SEBUAH ARTICLE 3</h3>
                </div>
            </a>
        </div>
        <div class="carousel-item">
                <img class="d-block w-100 cover img-fluid half-screen"  src="https://via.placeholder.com/1920x720" alt="Third slide">
                <a href="/article/1">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>INI JUDUL DARI SEBUAH ARTICLE 4</h3>
                    </div>
                </a>
            </div>
    </div>
</div> --}}

{{-- <div class="container pt-4">
    <h2 class="font-weight-bold">Article</h2>
    <div id="asset" class="mt-2 mb-5"></div>
    <div class="container">
        @foreach ($articles as $article)
        <div class="card">
                <div class="row no-gutters">
                    @foreach($article->media as $pic)
                    @if($loop->first)
                        @if (pathinfo($pic->path, PATHINFO_EXTENSION) == 'jpeg')
                            <div class="col-auto">
                                <img src="{{ '/storage/'.$pic->path }}" class="img-fluid img-blog" alt="">
                            </div>
                        @else
                            <a href="{{ '/storage/'.$pic->path }}">Download File</a>
                        @endif
                    @endif
                    @endforeach
                    
                    <div class="col align-self-center">
                        <div class="card-block px-3">
                            <a href="article/1"><h4 class="card-title f-futura">{{ $article->title }}</h4></a>
                            <h6 class="card-subtitle mb-2 text-muted">{{ Carbon\Carbon::parse($article->created_at)->format('D, d M Y') }}</h6>
                            <p class="card-text">{{ $article->body }}</p>
                            <hr>
                        </div>
                        <p class="text-muted float-left ml-3">tags : <a href="article/tag/asd">asd</a>, <a href="article/tag/asd">asd</a>, <a href="article/tag/asd">asd</a></p>
                        <a href="#"><p class="text-muted float-right mr-3"> 0 shares <i class="fa fa-share" aria-hidden="true"></i></p></a>
                        <a href="#"><p class="text-muted float-right mr-3"> 0 comments <i class="fa fa-comment" aria-hidden="true"></i></p></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <nav aria-label="Page navigation">
        <div class="mb-2">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </div>
      </nav>
</div> --}}

<div class="container pt-4">
    <h2 class="font-weight-bold">Article</h2>
    <div id="asset" class="mt-2 mb-5"></div>

    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="articles/1">
                        <img src="{{ asset('images/research/dumy.jpg') }}" class="img-fluid img-blog" alt="" width="auto">
                    </a>
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <a href="articles/1">
                            <h4 class="card-title f-futura">An Analysis of Teachers’ Strategies in Teaching Reading Comprehension</h4>
                        </a>
                        <p class="card-subtitle mb-2 text-muted">Published on January 1st, 2019</p>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A voluptatibus consectetur sunt nam 
                            cumque corrupti expedita? Hic odio, perspiciatis, quasi porro beatae officia quaerat nesciunt aperiam 
                            est mollitia, excepturi vel.
                        </p>
                        <hr>
                    </div>
                    <p class="text-muted float-left ml-3">category : <a href="articles/?=asd">asd</a></p>                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/research/dumy.jpg') }}" class="img-fluid img-blog" alt="" width="auto">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <h4 class="card-title f-futura">An Analysis of Teachers’ Strategies in Teaching Reading Comprehension</h4>
                        <p class="card-subtitle mb-2 text-muted">Published on January 1st, 2019</p>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A voluptatibus consectetur sunt nam 
                            cumque corrupti expedita? Hic odio, perspiciatis, quasi porro beatae officia quaerat nesciunt aperiam 
                            est mollitia, excepturi vel.
                        </p>
                        <hr>
                    </div>
                    <p class="text-muted float-left ml-3">category : <a href="articles/?=asd">asd</a></p>                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/research/dumy.jpg') }}" class="img-fluid img-blog" alt="" width="auto">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <h4 class="card-title f-futura">An Analysis of Teachers’ Strategies in Teaching Reading Comprehension</h4>
                        <p class="card-subtitle mb-2 text-muted">Published on January 1st, 2019</p>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A voluptatibus consectetur sunt nam 
                            cumque corrupti expedita? Hic odio, perspiciatis, quasi porro beatae officia quaerat nesciunt aperiam 
                            est mollitia, excepturi vel.
                        </p>
                        <hr>
                    </div>
                    <p class="text-muted float-left ml-3">category : <a href="articles/?=asd">asd</a></p>                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/research/dumy.jpg') }}" class="img-fluid img-blog" alt="" width="auto">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <h4 class="card-title f-futura">An Analysis of Teachers’ Strategies in Teaching Reading Comprehension</h4>
                        <p class="card-subtitle mb-2 text-muted">Published on January 1st, 2019</p>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A voluptatibus consectetur sunt nam 
                            cumque corrupti expedita? Hic odio, perspiciatis, quasi porro beatae officia quaerat nesciunt aperiam 
                            est mollitia, excepturi vel.
                        </p>
                        <hr>
                    </div>
                    <p class="text-muted float-left ml-3">category : <a href="articles/?=asd">asd</a></p>                    
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation">
        <div class="mb-2">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </div>
      </nav>
</div>
@endsection
