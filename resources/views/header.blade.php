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
