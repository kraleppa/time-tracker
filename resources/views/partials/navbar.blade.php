<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <div class="d-flex flex-row align-items-center gap-2">
                <img src="{{ asset('img/time.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
                <div>Time Tracker</div>
            </div>
        </a>      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/events">Events</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Categories</a>                
                    </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/events/create">New event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/create">New category</a>
                    </li>
                @endif
            </ul>
            <div class="d-flex gap-1 navbar-nav">
                @if (Auth::check())
                    <a class="nav-link" href="/profile">Profile</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent">Logout</button>
                    </form>                @else
                    <a class="nav-link" href="/login">Login</a>
                    <a class="nav-link" href="/register">Register</a>
                @endif

            </div>

        </div>
    </div>
</nav>
