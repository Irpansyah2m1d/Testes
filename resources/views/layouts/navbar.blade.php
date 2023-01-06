<nav class="navbar navbar-dark navbar-expand-lg bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Fatih Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link {{ $active === 'home' ? 'active' : ''; }}" aria-current="page" href="/">Home</a>
            <a class="nav-link {{ $active === 'about' ? 'active' : ''; }}" href="/about">About</a>
            <a class="nav-link {{ $active === 'posts' ? 'active' : ''; }}" href="/posts">Blog</a>
            <a class="nav-link {{ $active === 'categories' ? 'active' : ''; }}" href="/categories">Categories</a>
            @auth
                <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back, {{ auth()->user()->name  }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" name="logout" class="dropdown-item">Logout</button>
                    </form>
                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                </ul>
            @else
                <a class="nav-link ms-5 btn btn-outline-light text-dark {{ $active === 'login' ? 'active' : ''; }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>

            @endauth
        </div>
        </div>
    </div>
    </nav>