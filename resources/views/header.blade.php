<nav class="navbar navbar navbar-expand-lg navbar-light bg-light shift z-index " id="navbar">
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
            <li class="{{ Request::is('/') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="/">Home
                </a>
            </li>
            <li class="{{ Request::is('profile') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="/profile">
                    Profile
                </a>
            <li class="{{ Request::is('research') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="/research">Research
                </a>
            </li>
            <li class="{{ Request::is('gallery') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="/gallery">Gallery
                </a>
            </li>

            <li class="{{ Request::is('article') ? 'nav-item active' : 'nav-item' }}" >
            <a class="nav-link" href="/articles">Article</a>
            </li>

            <li class="{{ Request::is('contact') ? 'nav-item active' : 'nav-item' }}" style="margin-right: 50px;">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
    </nav>
