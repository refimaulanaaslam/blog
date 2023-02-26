
<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? 'active' : '') }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about" ? 'active' : '') }}"  href="/about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "posts" ? 'active' : '') }}"  href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "posts" ? 'active' : '') }}"  href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>               
          @else
          <li class="nav-item"><a href="/login" class="nav-link {{ ($title === "login" ? 'active' : '') }}">Login</a></li>
          <li class="nav-item"><a href="/register" class="nav-link btn btn-outline-secondary {{ ($title === "Register" ? 'active' : '') }}">Register</a></li>
          @endauth
          
        </ul>
      </div>
    </div>
  </nav>