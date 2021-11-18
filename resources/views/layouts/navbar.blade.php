<main class="navbar-wrapper">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-0">
        <div class="container-fluid">
            <a class="navbar-brand py-0" href="/">
                <img src="{{ asset('img/LogoPens.jpg') }}" alt="" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center ms-auto mb-2 mb-lg-0">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link text-center" href="/">Home</a>
                    </li>
                    <li
                        class="nav-item {{ (request()->is('karya*')) ? 'active' : '' }}">
                        <a class="nav-link text-center" href="{{route('karya')}}">Karya</a>
                    </li>
                    <li class="nav-item {{ request()->is('judul-pa*') ? 'active' : '' }}">
                        <a class="nav-link text-center" href="{{route('judul-pa')}}">Tawaran Judul PA</a>
                    </li>
                    <li
                        class="nav-item {{ request()->is('daftar-dosen*') || request()->is('daftar-dosen-details') ? 'active' : '' }}">
                        <a class="nav-link text-center" href="{{route('daftar-dosen')}}">Daftar Dosen</a>
                    </li>
                    <li class="nav-item {{ request()->is('tentang-kami') ? 'active' : '' }}">
                        <a class="nav-link text-center" href="{{route('tentang-kami')}}">Tentang Kami</a>
                    </li>
                    <div class="navbar-content-button px-2" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <a class="btn login-button" href="{{ route('login') }}">Login</a>
                            @endif
                            @else
                            <a class="btn" href="{{ route('dashboard') }}">
                                {{ __('Dashboard') }}
                            </a>
                            @endguest
                        </ul>
                    </div>
                </ul>


            </div>
        </div>
    </nav>
    {{-- <div class="d-flex justify-content-between align-items-center w-100">
        <div class="navbar-logo-image">
            <img src="{{ asset('img/LogoPens.jpg') }}" alt="">
        </div>
        <div class="navbar-content d-flex align-items-center">
            <div class="navbar-content-title d-flex align-items-center">
                <div class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/">Home</a>
                </div>
                <div class="nav-item {{ (request()->is('karya') or request()->is('karya-details')) ? 'active' : '' }}">
                    <a href="{{route('karya')}}">Karya</a>
                </div>
                <div class="nav-item {{ request()->is('judul-pa') ? 'active' : '' }}">
                    <a href="{{route('judul-pa')}}">Tawaran Judul PA</a>
                </div>
                <div
                    class="nav-item {{ request()->is('daftar-dosen') || request()->is('daftar-dosen-details') ? 'active' : '' }}">
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
                    <a class="btn login-button" href="{{ route('login') }}">Login</a>
                    @endif
                    @else
                    <a class="btn" href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                    @endguest
                </ul>
            </div>
        </div>
    </div> --}}
</main>
