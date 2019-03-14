@extends('layouts.main')

@section('content')

<div class="container">
    <h2 class="f-futura">All Articles</h2>
    <hr>
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/article/dumy.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <a href="articles/1"><h4 class="card-title">Paving the path to a brighter future</h4></a>
                        <h6 class="card-subtitle mb-2 text-muted">January 1st, 2019</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam 
                            perferendis explicabo excepturi dignissimos amet nesciunt! Doloremque nihil quos a officia sunt saepe minima cupiditate! sae...</p>
                        <hr>
                    </div>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 shares</p></a>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 comments</p></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/article/dumy.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <a href="articles/1"><h4 class="card-title">Paving the path to a brighter future</h4></a>
                        <h6 class="card-subtitle mb-2 text-muted">January 1st, 2019</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam 
                            perferendis explicabo excepturi dignissimos amet nesciunt! Doloremque nihil quos a officia sunt saepe minima cupiditate! sae...</p>
                        <hr>
                    </div>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 shares</p></a>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 comments</p></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/article/dumy.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <a href="articles/1"><h4 class="card-title">Paving the path to a brighter future</h4></a>
                        <h6 class="card-subtitle mb-2 text-muted">January 1st, 2019</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam 
                            perferendis explicabo excepturi dignissimos amet nesciunt! Doloremque nihil quos a officia sunt saepe minima cupiditate! sae...</p>
                        <hr>
                    </div>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 shares</p></a>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 comments</p></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="{{ asset('images/article/dumy.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col align-self-center">
                    <div class="card-block px-3">
                        <a href="articles/1"><h4 class="card-title">Paving the path to a brighter future</h4></a>
                        <h6 class="card-subtitle mb-2 text-muted">January 1st, 2019</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam 
                            perferendis explicabo excepturi dignissimos amet nesciunt! Doloremque nihil quos a officia sunt saepe minima cupiditate! sae...</p>
                        <hr>
                    </div>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 shares</p></a>
                    <a href="#"><p class="text-muted float-right mr-3"> 0 comments</p></a>
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
