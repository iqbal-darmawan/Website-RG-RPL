
<main class="footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 d-block">
                <a href="" class="footer-logo-image">
                    <img src="{{ asset('img/logopens-white.png') }}" alt="">
                </a>
                <h4 class="footer-description m-0"> DEPARTEMEN TEKNIK INFORMATIKA DAN KOMPUTER POLITEKNIK ELEKTRONIKA NEGERI SURABAYA </h4>
                <p class="footer-description mb-2" id="footer-description-location">Jl. Raya ITS, Sukolilo, Kota Surabaya, 60111</p>
                <p class="footer-description mb-0"><b>Phone </b>: +851231241412 </p>
                <p class="footer-description"><b>Email </b>: rgrpl@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h3 class="quick-contact">Quick Contact</h3>
                <form action="">
                    <div class="mb-3">
                        <input type="email" name="email" id="email" placeholder="Enter email" class="quick-contact-input ">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="quick-contact-input" placeholder="Enter Message" id="floatingTextarea"></textarea>
                    </div>
                    <button type="submit" class="quick-contact-button">Send Message</button>
                </form>
            </div>
            <div class="col-md-4">
                <h3 class="usefull-links">Usefull Links</h3>
                <ul class="list-unstyled links">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('karya')}}">Karya</a></li>
                    <li><a href="{{route('daftar-dosen')}}">Daftar Dosen</a></li>
                    <li><a href="{{route('tentang-kami')}}">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>
<div class="copyright-wrapper">
    <div class="container copyright">
        <p class="m-0 copyright-text py-1">Copyright@ RGRPL 2021 LizanTeam</p>
    </div>
</div>
