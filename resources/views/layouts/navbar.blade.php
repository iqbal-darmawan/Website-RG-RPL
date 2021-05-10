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
            <div class="navbar-content-button px-2">
                <a href="" class="btn">Login</a>
            </div>
        </div>
    </div>
</main>
