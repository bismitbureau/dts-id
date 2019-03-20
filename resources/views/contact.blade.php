@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <div class="contact-content">
           <h1>Let's do Something Amazing.</h1>
            <p>Keas 69 Str.</p>
            <p>15234, Chalandri</p>
            <p>Athens,</p>
            <p>Greece</p>
            <br>
            <p>+30-2106019311 (landline)</p>
            <p>+30-6977664062 (mobile phone)</p>
            <p>+30-2106398905 (fax)</p>
        </div>
    </div>
    <div class="col-sm-6">
        <img class="contact-img" src="/images/contact/contact.jpeg">
    </div>
</div>

<div style="margin-top: 50px";><div/>
<div class="newsletter center">

    <div class="card">
        <div class="card-body">
            <!-- Form register -->
            <form>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input placeholder="Your Name" type="text" id="orangeForm-name37" class="form-control">
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input placeholder="Your Email" type="text" id="orangeForm-email37" class="form-control">
                </div>
                <div class="text-center py-4">
                    <button class="btn btn-outline-dark">Subscribe</button>
                </div>
            </form>
            <!-- Form register -->
        </div>
    </div>
</div>

@endsection
