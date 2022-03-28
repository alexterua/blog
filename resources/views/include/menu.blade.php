<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="Edica"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="edicaMainNav">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('main.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            {{--<li class="nav-item">
                <a class="nav-link" href="#">Language: <span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> En</a>
            </li>--}}
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.main.index') }}"><i class="fas fa-user mr-2"></i>User Cabinet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                </li>
            @endauth
            @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-address-book mr-2"></i>Register</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>
