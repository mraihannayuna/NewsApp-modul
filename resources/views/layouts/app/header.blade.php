<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light fs-5" href="#"><svg class="mx-2 fs-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#5c98ff}</style><path d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6V377.4c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4V134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1v-188L288 246.6v188z"/></svg>NewsApp</a>
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
