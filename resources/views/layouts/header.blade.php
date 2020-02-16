<header id="header" class="default-header colored flat-menu">
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="{{ route('home') }}">
                Portal
            </a>
        </div>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    @can('products.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index')}}">Productos</a>
                        </li>
                    @endcan()

                    @can('users.index')

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index')}}">Usuarios</a>
                        </li>
                    @endcan()

                    @can('roles.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index')}}">Roles</a>
                        </li>
                    @endcan()
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header><!-- Header Ends -->
