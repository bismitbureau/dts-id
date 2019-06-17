<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- head -->
<head>
<!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Custom styles for this template -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">


@include('header')

</head>
<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/headerFooter.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<!-- end head -->

<body>
<!-- wrapper -->
@yield('content')
<!-- end wrapper -->

<!-- footer -->
@include('footer')
<!-- end footer -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
$(document).ready(function() {
    var docHeight = $(window).height();
    var footerHeight = $('#footer').outerHeight();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight)
        $('#footer').css('margin-top', 18+ (docHeight - footerTop) + 'px');
});
</script>
<script src="js/scrollreveal.js"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
<script>
    window.sr = ScrollReveal({ reset: false },
        {
            mobile: false
        });

    // Customizing a reveal set
    const reveal = {
        origin : 'left',
        delay    : 300,
        distance : '120px',
        easing   : 'ease-in-out',
    };
    const reveal2 = {
        origin : 'right',
        delay    : 500,
        distance : '120px',
        easing   : 'ease-in-out',
    };

    const reveal3 = {
        origin : 'left',
        delay    : 500,
        distance : '120px',
        easing   : 'ease-in-out',
    };
    sr.reveal('.whoweare',reveal);
    sr.reveal('.whatwedo',reveal2);
    sr.reveal('.whatwethink',reveal3);
    sr.reveal('.summary');
</script>


<!--HOME JS -->
<!--<script>-->
<!--    window.sr = ScrollReveal();-->
<!--    sr.reveal('.summary',2);-->
<!--</script>-->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</body>

</html>
