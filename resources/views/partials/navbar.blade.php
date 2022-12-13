<style>
    #tes:hover {
        background-color:black;
        color : white;
    }

    .dropdown-item:hover {

      background-color: #588157;
      color:white;
    }

</style>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Pendakian Bawakaraeng</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ ($title === 'Portal Berita' || $title === 'Booking Pendakian') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/booking">Booking Pendakian</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/posts">Portal Berita</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      @auth('userbooking')
      <li class="nav-item dropdown navbar-nav me-4">
          <a class="nav-link {{ ($title === 'Portal Berita' || $title === 'Booking Pendakian') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth('userbooking')->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      @else
        <li class="nav-item navbar-nav me-4 mb-2 mb-lg-0">
          <a class="nav-link active" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      @endauth


    </div>
  </div>
</nav>

