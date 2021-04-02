<nav class="site-navigation flex flex-column justify-content-between">
    <div class="site-branding d-none d-lg-block ">
        <h1 class="site-title"><a href="/" rel="home"><img src="{{ asset("assets/images/logo5.png") }}" alt="Logo"></a></h1>
    </div><!-- .site-branding -->

    <ul class="main-menu flex flex-column justify-content-center">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        @auth()
            @if(Auth::user()->isAdmin())
            <li><a href="{{ route('create-blog') }}">Create blog</a></li>
            <li><a href="{{ route('my-blogs') }}">My blogs</a></li>
                @endif
        @endauth
        @guest()
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endguest
        @auth()
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endauth

    </ul>

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>


    <div class="social-profiles">
        <ul class="flex justify-content-start justify-content-lg-center align-items-center">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div><!-- .social-profiles -->
</nav><!-- .site-navigation -->

<div class="nav-bar-sep d-lg-none"></div>
