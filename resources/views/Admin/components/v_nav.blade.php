<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('template/')}}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link{{request()->is('/') ? ' active' : ''}}" href="/">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('dosen') ? ' active' : ''}}" href="/dosen">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Profile Dosen</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('mahasiswa') ? ' active' : ''}}" href="/mahasiswa">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Karya mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('judulpa') ? ' active' : ''}}" href="/judulpa">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Judul PA</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('user') ? ' active' : ''}}" href="/user">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('/industri') ? ' active' : ''}}" href="/industri">
                <i class="ni ni-building text-info"></i>
                <span class="nav-link-text">Industri</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('/login') ? ' active' : ''}}" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
