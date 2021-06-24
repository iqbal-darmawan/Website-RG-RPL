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
              <a class="nav-link{{request()->is('/home') ? ' active' : ''}}" href="/home">
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
              <a class="nav-link{{request()->is('mahasiswa') ? ' active' : ''}}" onclick="" href="/mahasiswa">
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
              <a class="nav-link{{request()->is('industri') ? ' active' : ''}}" href="/industri">
                <i class="ni ni-building text-info"></i>
                <span class="nav-link-text">Industri</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('gallery') ? ' active' : ''}}" href="/gallery">
                <i class="ni ni-image text-danger"></i>
                <span class="nav-link-text">Gallery</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('materi') ? ' active' : ''}}" href="/materi">
                <i class="ni ni-folder-17 text-success"></i>
                <span class="nav-link-text">Materi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{request()->is('/login') ? ' active' : ''}}" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
