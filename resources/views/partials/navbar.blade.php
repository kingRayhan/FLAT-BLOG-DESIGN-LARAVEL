    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-fixed-top primary-color-dark scrolling-navbar float-xs-right">
            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-wrapper">
                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <a class="navbar-brand" href="{{ route('home') }}">FLAT BLOG</a>
                    <!--Links-->
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog1') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('blog1') }}">Blog 1</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog2') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('blog2') }}">Blog 2</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog3') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('blog3') }}">Blog 3</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog4') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('blog4') }}">Blog 4</a>
                        </li>
                        <li class="nav-item btn-group {{ Request::is('single1') ? 'active' : null }}">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   Single Page
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="{{ route('single1') }}">Single Page 1</a>
                            </div>
                        </li>
                    </ul>
                    <!--Navbar icons-->
                    <ul class="nav navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!--/.Collapse content-->
            </div>
        </nav>
        <!--/.Navbar-->
    </header>