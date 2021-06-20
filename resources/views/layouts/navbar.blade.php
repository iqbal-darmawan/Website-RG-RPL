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
                <div class="nav-item {{ (request()->is('karya') or request()->is('karya-details')) ? 'active' : '' }}">
                    <a  href="{{route('karya')}}">Karya</a>
                </div>
                <div class="nav-item {{ request()->is('judul-pa') ? 'active' : '' }}">
                    <a href="{{route('judul-pa')}}">Tawaran Judul PA</a>
                </div>
                <div class="nav-item {{ request()->is('daftar-dosen') || request()->is('daftar-dosen-details') ? 'active' : '' }}">
                    <a href="{{route('daftar-dosen')}}">Daftar Dosen</a>
                </div>
                <div class="nav-item {{ request()->is('tentang-kami') ? 'active' : '' }}">
                    <a href="{{route('tentang-kami')}}">Tentang Kami</a>
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
