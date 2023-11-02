<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <div class="d-flex flex-row align-items-center gap-2">
                <img src="{{ asset('img/time.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
                <div>Time Tracker</div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/events">Events</a>
                <a class="nav-link" href="/categories">Categories</a>
                <a class="nav-link" href="/events/create">Add new event</a>
            </div>
        </div>
    </div>
</nav>