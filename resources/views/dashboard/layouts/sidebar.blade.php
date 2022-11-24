<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <div>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3  mb-1 text-muted">
          <span>Pengaturan</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span ></span>
          </a>
        </h6>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a style="" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="#">
              <span  data-feather="file"></span>
              Kuota Pendakian
            </a>
          </li>
          <li class="nav-item">
            <a  class="nav-link kematian" href="#">
              <span data-feather="file"></span>
              Tarif Pendakian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Info Pendakian
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
          <span>Data Pengguna</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Data Booking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Data Pendaki
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
          <span>Portal Berita</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="users"></span>
              Portal Berita
            </a>
          </li>
        </ul>
      </div>
    </nav>