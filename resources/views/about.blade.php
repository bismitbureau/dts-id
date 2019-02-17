@extends('layouts.main')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.mckinsey.com/~/media/McKinsey/About%20Us/Overview/McK_About-us_hero_DCC-Aachen.ashx?mw=1536&car=546:205&cpx=Center&cpy=Center" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5 class="f-futura"> Help People</h5>
                        <p class="f-futura">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis esse amet aliquid labore adipisci! Repellendus nostrum eveniet, incidunt nesciunt autem perferendis illo cupiditate, enim ad pariatur laboriosam voluptas fugit!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.mckinsey.com/~/media/McKinsey/About%20Us/Overview/McK_About-us_hero_DCC-Aachen.ashx?mw=1536&car=546:205&cpx=Center&cpy=Center" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5 class="f-futura"> Help People</h5>
                        <p class="f-futura">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis esse amet aliquid labore adipisci! Repellendus nostrum eveniet, incidunt nesciunt autem perferendis illo cupiditate, enim ad pariatur laboriosam voluptas fugit!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.mckinsey.com/~/media/McKinsey/About%20Us/Overview/McK_About-us_hero_DCC-Aachen.ashx?mw=1536&car=546:205&cpx=Center&cpy=Center" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                        <h5 class="f-futura"> Help People</h5>
                        <p class="f-futura">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis esse amet aliquid labore adipisci! Repellendus nostrum eveniet, incidunt nesciunt autem perferendis illo cupiditate, enim ad pariatur laboriosam voluptas fugit!</p>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="d-flex justify-content-center my-3">
        <h1 class="f-futura">WHAT WE DO</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p class="f-futura text-center px-5 mx-5">
            We are a global management consulting firm that serves a broad mix of private, public and social sector institutions. We help our clients make significant and lasting improvements to their performance and realize their most important goals. With nearly a century of experience, we’ve built a firm uniquely equipped to this task.
        </p>
    </div>
@endsection
