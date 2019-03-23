@extends('layouts.main')

@section('content')


<div class="parallax_home img-fluid">
    <div class="w3-container home-transparent">
        <div class="my-5"></div>
        <h1 style="padding-top: 1em" class="text-center big">DTS INDONESIA</h1>
        <h5 class="text-center mb-5 pb-5 small" style="font-size:1.2rem">Development, Technology, and Strategy</h5>

    </div>

</div>

<div class="summary">
    <div id="container-1" class="bacod">
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
    <div class="whoweare">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="container-2">
                <h1>Who is DTS Indonesia ?</h1>
                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
        </div>
    </div>

</div>
<!--What we do-->
<div class="container-fluid content">
    <div class="whatwedo">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="container-2">
                <h1>What DTS Indonesia do ?</h1>
                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>

<div class="container-fluid content">
    <div class="whatwethink">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4" id="container-2">
                <h1>What DTS Indonesia think ?</h1>
                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <img src="/images/home/whoarewe.jpeg" class="responsive">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="home-article">
        <div class="card-deck">
            <div class="card" style="width:20em">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
            <div class="card" style="width:20em">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
            <div class="card" style="width:20em">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
            <div class="card" style="width:20em">
                <img class="card-img-top" src="https://d3bv2hg4q0qyg2.cloudfront.net/2018/09/16/research.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">An Article</h4>
                    <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                    <a href="#" class="btn btn-outline-dark">Read More</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid" style="padding-top: 2em;width: 80%;">
    <!-- Form register -->
    <form>

        <div class="md-form">
            <div class="row">
                <div class="col-sm-12">
                    <i class="fa fa-user prefix grey-text "></i>
                </div>
            </div>
            <input placeholder="Your Name" type="text" id="orangeForm-name37" class="form-control">
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text "></i>
            <input placeholder="Your Email" type="text" id="orangeForm-email37" class="form-control">
        </div>
        <div class="text-center py-4">
            <button class="btn btn-outline-dark">Subscribe</button>
        </div>
    </form>
    <!-- Form register -->

</div>
@endsection
