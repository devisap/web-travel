<header class="header header-2 header-fixed">
    <div class="header-main">
        <div class="row align-items-center">
            <div class="col-h1">
                <a class=" navbar-brand scroll" href="{{ 'home' }}">
                    <img class="normal-logo" src="{{ asset('media/logo.png') }}" alt="logo">
                </a>
                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i
                        class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
            </div>
            <div class="col-h3">
                <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                    <ul class="yamm main-menu navbar-nav">
                        <li class="nav-item {{ Request::segment(1) === 'home' ? 'active' : null }}"><a class="nav-link" href="{{ 'home' }}">Home<span
                                    class="sr-only">(current)</span></a></li>
                        <li class="nav-item {{ Request::segment(1) === 'sewa-mobil' ? 'active' : null }}"><a class="nav-link" href="{{ 'sewa-mobil' }}">Sewa Mobil</a></li>
                        <li class="nav-item {{ Request::segment(1) === 'paket-wisata' ? 'active' : null }}"><a class="nav-link" href="{{ 'paket-wisata' }}">Paket Wisata</a></li>
                        <li class="nav-item {{ Request::segment(1) === 'tentang-kami' ? 'active' : null }}"><a class="nav-link" href="{{ 'tentang-kami' }}">Tentang Kami</a></li>
                        <li class="nav-item {{ Request::segment(1) === 'kontak' ? 'active' : null }}"><a class="nav-link" href="{{ 'kontak' }}">Kontak</a></li>
                    </ul>
                </nav>
                <a class="vender-link"
                href="https://api.whatsapp.com/send?phone=6281332033337&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi.">
                Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
</header>
