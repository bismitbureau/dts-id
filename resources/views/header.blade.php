<!--<nav class="navbar navbar sticky-top navbar-expand-lg navbar-dark bg-dark shift " id="navbar">-->
<!--  <a class="navbar-brand" href="#">LOGO</a>-->
<!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">-->
<!--    <span class="navbar-toggler-icon"></span>-->
<!--  </button>-->
<!---->
<!--  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">-->
<!--    <ul class="navbar-nav mr-auto s">-->
<!--      <li class="nav-item active">-->
<!--        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>-->
<!--      </li>-->
<!--      <li class="nav-item dropdown active">-->
<!--        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--          Profile-->
<!--        </a>-->
<!--        <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--          <a class="dropdown-item" href="/about">About Us</a>-->
<!--          <a class="dropdown-item" href="#">Board of Director</a>-->
<!--      </li>-->
<!--      <li class="nav-item dropdown active">-->
<!--        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--          Research-->
<!--        </a>-->
<!--        <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--          <a class="dropdown-item" href="#">Research 1</a>-->
<!--          <a class="dropdown-item" href="#">Research 2</a>-->
<!--          <a class="dropdown-item" href="#">Research 3</a>-->
<!--          <a class="dropdown-item" href="#">Research 4</a>-->
<!--      </li>-->
<!--      <li class="nav-item active float-right">-->
<!--        <a class="nav-link" href="/contact">Contact Us<span class="sr-only">(current)</span></a>-->
<!--      </li>-->
<!--    </ul>-->
<!--    {{-- search button-->
<!--      <form class="form-inline my-2 my-lg-0">-->
<!--      <input class="form-control mr-sm-2" type="search" placeholder="Search">-->
<!--      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--    </form> --}}-->
<!--  </div>-->
<!--</nav>-->

<nav class="navbar navbar navbar-expand-lg navbar-light bg-light shift " id="navbar">
    <!-- Navbar brand -->
    <a style="font-family: Raleway;font-size: 22px;font-weight:lighter;" class="navbar-brand" href="/">DTS INDONESIA</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>

    <!-- Collapsible content -->
    <div style="font-family: Avenir;font-size: 14px;" class="collapse navbar-collapse text-center" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="{{ Request::is('/') ? 'nav-item active' : '' }}">
                <a class="nav-link" href="/">Home
                </a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/about">About Us</a>
                  <a class="dropdown-item" href="/board-of-directors">Board of Director</a>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <li class="nav-item"
                <a class="nav-link" href="/article">Article</a>
            </li>
        </ul>
    </div>
     </nav>
