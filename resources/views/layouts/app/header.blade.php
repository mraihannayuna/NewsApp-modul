<nav class="navbar navbar-expand-lg bg-dark">
<div class="container-fluid">
        <a class="navbar-brand text-light fs-5" href="#">
            <i class="fa-solid fa-cube fa-flip-both fa-xl" style="color: #669eff;"></i>
            NewsApp
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        <a href="#" class="btn btn-outline-info text-white-emphasis me-2 mb-2">Login</a>
        @else
        <div class="nama fs-6 fw-bold d-flex align-items-center justify-content-center">
            <span>{{ Auth::user()->name }}</span>
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle ms-3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png" alt="User Avatar" width="32" height="32" class="rounded-circle"/>
            </a>
        <ul class="dropdown-menu text-small">
            <li>
                <a class="dropdown-item text-muted">Account</a>
            </li>
            <li>
                <a class="dropdown-item" href="#" class="btn btn-outline-danger ms-2 mb-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign out</a>
            </li>
                <form action="#" id="logout-form" method="POST" style="display: none">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </ul>
        </div>
        @endguest
</div>
</nav>


