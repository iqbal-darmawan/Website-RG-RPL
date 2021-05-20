<main class="navbar px-4">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="navbar-logo-image">
            <img src="{{ asset('img/LogoPens.jpg') }}" alt="">
        </div>
        <div class="navbar-content d-flex align-items-center">
            <div class="navbar-content-title d-flex align-items-center">
                <div class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/">Home</a>
                </div>
                <div class="nav-item {{ request()->is('karya') ? 'active' : '' }}">
                    <a  href="/karya">Karya</a>
                </div>
                <div class="nav-item">
                    <a href="">Tawaran Judul PA</a>
                </div>
                <div class="nav-item">
                    <a href="">Daftar Dosen</a>
                </div>
                <div class="nav-item">
                    <a href="">Tentang Kami</a>
                </div>
            </div>
            <div class="navbar-content-button px-2" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <a class="btn" href="{{ route('login') }}">Login</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </div>
    </div>
</main>
