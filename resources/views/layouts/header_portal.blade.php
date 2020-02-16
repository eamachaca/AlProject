
<!-- barra de del menu -->
<header id="header" class="default-header colored flat-menu">
    <div class="header-top">
        <div class="container">

            <ul class="social-icons color">
                <li class="facebook"><a href="https://www.facebook.com/FICCTUAGRMOFICIAL/" target="_blank" title="Facebook">Facebook</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="logo">
            <a href="{{route('home')}}">
                <img alt="Universh" width="211" height="40" data-sticky-width="150" data-sticky-height="28" src="{{asset('images/default/logo3.png')}}">
            </a>
        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="dropdown mega-menu-item mega-menu-fullwidth mega-menu-halfwidth">
                        <a class="dropdown-toggle" href="#">
                            Portal
                            <i class="fa fa-caret-down"></i>						</a>
                        <ul class="dropdown-menu">

                            <li>  @if (Route::has('login'))
                                    @auth
                                        <a href="{{ route('home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">login</a>
                                        <a href="{{ route('register') }}">registro</a>
                                    @endauth

                                @endif
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Carreras
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="testimonial.html">Ing .Informatica</a></li>
                            <li><a href="testimonial.html">Ing en Sistemas</a></li>
                            <li><a href="testimonial.html">Ing. en Redes</a></li>
                        </ul>

                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Reglamento
                            <i class="fa fa-caret-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Normas
                            <i class="fa fa-caret-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Docentes
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="testimonial.html">Curriculums</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header><!-- Header Ends -->
