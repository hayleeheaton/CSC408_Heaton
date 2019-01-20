<?php
/*
 * Filename: menu.blade.php
 *
 * Description - Navigation menu for the site
 *
 * Details - The items on the menu are shown / hidden based on two factors:
 *      1. User is logged in or not
 *      2. Access level of the person that is logged in.  Definitions of login levels are defined
 *          as constants in the Users.php model file.
 */
?>

<header class="navbar navbar-default navbar-fixed-top topnav" role="banner">
    <div class="container topnav">
        <nav role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="/"><img src="/img/logo.png"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav  navbar-right">
                        @auth
                            @if (Auth::user()->id == 1)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movies<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/movies/create">Add Movie</a></li>
                                        <li><a href="/movies">Manage Movies</a></li>
                                    </ul>
                                </li>
                            @endif
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="{{ route('return') }}">Return Movie</a></li>
                                        <li><a class="dropdown-item" href="{{ route('history') }}">Rental History</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
			