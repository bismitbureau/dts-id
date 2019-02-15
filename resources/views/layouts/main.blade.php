<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
<!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous">


<!-- Custom styles for this template -->

@include('header')

</head>
<!-- end head -->

<body>
<!-- wrapper -->
<div id="wrapper">
@yield('content')
</div>
<!-- end wrapper -->

<!-- footer -->
@include('footer')
<!-- end footer -->
</body>

</html>
