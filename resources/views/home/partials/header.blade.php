<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="img/logo-hitam.png" height="50" width="50" alt="logo">Central Coffe
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Menu</a></li>
      </ul>

      <div class="col-md-3 text-end">
          @auth
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Log out</a></button>
                  </form>
              </li>
        </ul>
            @else
            <a href="/login"><button type="button" class="btn btn-outline-dark me-2">Login</button></a>
            <a href="/register"><button type="button" class="btn btn-dark">Sign-up</button></a>
        @endauth
        
      </div>
    </header>
  </div>