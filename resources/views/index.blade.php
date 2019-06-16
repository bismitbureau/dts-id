@extends('layouts.main')

@section('content')


<div class="parallax_home img-fluid">
    <div class="w3-container home-transparent">
        <div class="my-5"></div>
        <h1 class="text-center big font-weight-bold pt-5">DTS INDONESIA</h1>
        <h5 class="text-center mb-5" style="font-size:2rem">Development, Technology, and Strategy</h5>

    </div>

</div>

<div class="summary">
    <div id="container-1" class="py-5 bacod">
        <h1>DTS INDONESIA AT A GLANCE</h1>
        <br>
        <h6 style=" text-transform: none; font-weight: bold;">A Bit of Background</h6>
        <p>Here at DTS Indonesia, we are driven by a single goal; to do our part in making the world a better place for all. Our decision making process is informed by comprehensive empirical studies and high quality data evaluation. We strive to build productive relationships and make a positive impact with all of our pursuits.</p>
        <a href="/profile">
            <button class="btn btn-outline-dark">Our Profile</button>
        </a>
    </div>
</div>
<div><img src="/images/home/Home2.jpeg" style="max-height: 60%;" </div>

<!--Who we are-->
<div data-sr class="container-fluid content">
    <div class="whoweare container py-5">
        <div class="row">
            <div class="col-md-8 position-relative" id="container-2">
                <div class="description p-5">
                    <h1 class="font-weight-bold">Who is DTS Indonesia ?</h1>
                    <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
        </div>
    </div>

</div>
<!--What we do-->
<div class="container-fluid content whatwedo ">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
            <div class="col-md-8 position-relative" id="container-2">
                <div class="description p-5">
                    <h1 class="font-weight-bold">What DTS Indonesia do ?</h1>
                    <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid content whatwethink">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 position-relative" id="container-2">
                <div class="description p-5">
                    <h1 class="font-weight-bold">What DTS Indonesia think ?</h1>
                    <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="home-article">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body pb-5">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
                <div class="text-right">
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body pb-5">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-outline-dark">Read More</a>
                    </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body pb-5">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-outline-dark">Read More</a>
                    </div>
            </div>
        </div>
    </div>

</div>

<div class="container pt-5" style="width: 70%;">
    <div class="text-center py-5">
        <h1>Subsrcribe to Us!</h1>
        <hr>
    </div>
    <!-- Form register -->
    <form>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="text-center py-4">
            <button class="btn btn-outline-dark">Subscribe</button>
        </div>
    </form>
    <!-- Form register -->

</div>
@endsection
