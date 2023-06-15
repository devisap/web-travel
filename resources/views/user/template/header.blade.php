<header class="header">
    <div class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand pt-0" href="/"><img src="{{ asset('user/images/logo.png') }}" alt=""
                        class="img-fluid diverge-logo" style="width: 100px" /></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::segment(1) === 'beranda'? 'active' : null }}">
                            <a class="nav-link text-decoration-none navbar-text-color home-margin-top"
                                href="beranda">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'sewa-mobil' ? 'active' : null }}">
                            <a class="nav-link text-decoration-none navbar-text-color" href="{{ 'sewa-mobil' }}">Sewa
                                Mobil</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'paket-wisata' ? 'active' : null }} ">
                            <a class="nav-link text-decoration-none navbar-text-color" href="{{'paket-wisata'}}">Paket Wisata</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'tentang-kami' ? 'active' : null }}">
                            <a class="nav-link text-decoration-none navbar-text-color" href="{{'tentang-kami'}}">Tentang Kami</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'kontak' ? 'active' : null }}">
                            <a class="nav-link text-decoration-none navbar-text-color" href="{{'kontak'}}">Kontak</a>
                        </li>
                    </ul>
                    <div class="btn-talk ml-auto">
                        <ul class="m-0 p-0">
                            <li class="list-unstyled d-lg-inline-block"><a class="nav-link contact"
                                    href="https://wa.me/send?phone=6281332033337&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi.">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
