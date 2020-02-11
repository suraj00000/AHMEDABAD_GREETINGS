<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            rel="stylesheet"
            href="{{ asset('css/bootstrap/bootstrap.css') }}"
        />
        @yield('css')

        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
        <nav class="navbar navbar-expand-md navbar-light bg-info navi">
            <a class="navbar-brand" href="#">
                <img
                    src="{{ asset('image/logo.png') }}"
                    width="200"
                    height="40"
                    alt=""
            /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/admin') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/user') }}" class="nav-link">User</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manager</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/product') }}" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Party Plots</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login')) @auth
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"
                            >Login</a
                        >
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"
                            >Register</a
                        >
                    </li>
                    @endif @endauth @endif
                </ul>
            </div>
        </nav>
        @show @yield('content') @section('footer')
        <div>
            <h1>Footer side</h1>
        </div>
        @show

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
