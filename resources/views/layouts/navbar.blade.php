<main class="navbar px-4">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="navbar-logo-image">
            <img src="{{ asset('img/LogoPens.jpg') }}" alt="">
        </div>
        <div class="navbar-content d-flex align-items-center">
            <div class="navbar-content-title d-flex align-items-center">
                <div class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/">Dashboard</a>
                </div>
                <div class="nav-item {{ request()->is('karya') ? 'active' : '' }}">
                    <a  href="/karya">Karya</a>
                </div>
                <div class="nav-item {{ request()->is('judulpa') ? 'active' : '' }}">
                    <a href="/judulpa">Tawaran Judul PA</a>
                </div>
                <div class="nav-item {{ request()->is('dosen') ? 'active' : '' }}">
                    <a href="/dosen">Daftar Dosen</a>
                </div>
                <div class="nav-item {{ request()->is('tentangkami') ? 'active' : '' }}">
                    <a href="/tentangkami">Tentang Kami</a>
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
                        <a class="btn" href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                        @endguest
                    </ul>
                </div>
        </div>
    </div>
</main>
