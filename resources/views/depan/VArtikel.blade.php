@include('depan.template.header')
<body class="page">
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        @include('depan.template.navmobile')
        <div data-canvas="container">
            <header class="header">
                <div class="header-main">
                    <div class="row align-items-center" style="margin-top: -2%;">
                        <div class="col-h1">
                            <a class="navbar-brand scroll" href="{{'home'}}"><img class="img-fluid" src="{{ asset('media/logo.png') }}" alt="logo"></a>
                            <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
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
                            href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkinAnda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil2. Transportasi VIP3. Perjalanan Dinas4. Acara Keluarga5. Pelayanan Tour Wisata6. Pernikahan7. Dan lain sebagainyaKami menyediakan armada terbaru yang bersih dan wangi. Untuk info lebih detail bisa akses website official kami : *https://kenztranz.com/*">
                            Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end .b-title-page-->
            <div class="l-main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <main class="b-post-full-wrap">
                                <article class="b-post b-post-full clearfix">
                                    <div class="entry-media"><a class="js-zoom-images" href="{{ asset('media/image/avanza.png') }}"><img class="img-fluid" src="{{ asset('media/image/avanza.png') }}" style="max-height: 450px; min-height: 450px; width: 100%" alt="Foto" /></a></div>
                                    <div class="entry-main">
                                        <div class="entry-meta">
                                            <div class="entry-date bg-primary"><span class="entry-date__month">25</span><span class="entry-date__month">dec</span><span class="entry-date__month">2023</span></div>
                                            <span class="entry-meta__item"><i class="fa-regular fa-user mr-2"></i>by Admin</span>
                                        </div>
                                        <div class="entry-header">
                                            <h1 class="entry-title">Sewa Mobil Dinas Terpercaya</h1>
                                        </div>
                                        <div class="entry-content">
                                            <p>Keberadaan mobil dinas bisa dikatakan sangat penting guna meningkatkan kinerja dalam melaksanakan tugas. Hanya saja, keberadaan mobil dinas juga tentu akan membebani biaya operasional kantor. Sebagai solusinya, kini sudah tersedia layanan sewa mobil dinas yang lebih hemat budget.</p>
                                            <p>Meski mobil sewaan, kenyamanan yang didapat setara dengan mobil pribadi berstandar premium, asalkan Anda memilih jasa yang tepat.</p>
                                            <p>Nah, Ken'z Trans adalah penyedia layanan sewa kendaraan operasional kantor terbaik dengan armada mewah paling nyaman di Jawa Timur. Beberapa merek ternama yang disediakan untuk perjalanan dinas, seperti Innova Reborn, Mobilio, Ertiga, Avanza, Toyota Hiace, dan Elf Long.</p>
                                            <p>Masing-masing harga sewa mobil dinas terbaru bisa Anda lihat dalam ulasan di bawah ini.</p>
                                            
                                            <h2 class="ui-subtitle">Paket Sewa Mobil Dinas Agar Hemat Budget</h2>
                                            <p>Untuk keperluan dinas, paket sewa mobil adalah pilihan terbaik, sebab harga sewa sudah termasuk driver dan biaya BBM. Anda tidak perlu repot memikirkan SIM maupun rute perjalanan karena semua telah diatur dengan sangat terjadwal sehingga perjalanan terkait pekerjaan Anda berjalan dengan lancar.</p>
                                            <p>Berikut kami berikan daftar biaya sewa mobil termurah paling baru, khusus bagi Anda yang akan melakukan perjalanan dinas dalam waktu dekat.</p>
                                            <h4 class="ui-subtitle">1. Innova Reborn</h4>
                                            
                                            <p>Mobil Innova juga kerap dipilih oleh kalangan institusi pemerintah sebab harganya yang murah namun tetap memberikan kenyamanan ekstra.</p>
                                            <p>Di samping itu, urusan performa, Innova Reborn Facelift terbukti bertenaga. Fitur entertainment dan keselamatan juga lengkap.</p>
                                            <p><strong>Kursi:</strong> 8 Penumpang</p>
                                            <p><strong>Harga Sewa:</strong> Rp 600.000/hari</p>
                                            <p><strong>Biaya Sudah Termasuk:</strong> Driver, Excellent Service (VVIP)</p>
                                            <p><strong>Di luar biaya:</strong> BBM, Tol & Parkir</p>
                                            
                                            <h4 class="ui-subtitle">2. All New Avanza</h4>
                                            <p>Selain Innova, All New Avanza juga populer sebagai mobil dinas para pejabat. Perjalanan jauh sekalipun akan tetap nyaman karena kabin cukup lega, serta aman berkat kelengkapan fitur keselamatan yang disematkan pada mobil MPV Toyota ini.</p>
                                            <p>Ditambah lagi, mobil ini memiliki efisiensi bahan bakar terbaik sehingga biaya untuk bensin jauh  lebih sedikit.</p>
                                            <p><strong>Kursi:</strong> 7 Penumpang</p>
                                            <p><strong>Harga Sewa:</strong> Rp 600.000/hari</p>
                                            <p><strong>Biaya Sudah Termasuk:</strong> Driver, Excellent Service (VVIP)</p>
                                            <p><strong>Di luar biaya:</strong> BBM, Tol & Parkir</p>
                                            
                                            <h4 class="ui-subtitle">3. Toyota Hiace</h4>
                                            <p>Jika Anda membutuhkan mobil dinas dengan kapasitas penumpang lebih dari 10 orang, Toyota Hiace adalah pilihan terbaik.</p>
                                            <p>Tidak perlu khawatir dengan kenyamanan karena bagian kabin sangat lega dan sudah dilengkapi berbagai fitur yang modern.</p>
                                            <p><strong>Kursi:</strong> 15 Orang</p>
                                            <p><strong>Harga Sewa:</strong> Rp 900.000/hari</p>
                                            <p><strong>Biaya Sudah Termasuk:</strong> Driver, Excellent Service (VVIP)</p>
                                            <p><strong>Di luar biaya:</strong> BBM, Tol & Parkir</p>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="entry-footer">
                                        <ul class="list-tags list-unstyled">
                                            <li class="list-tags__item"><a class="list-tags__link" href="{{'home'}}">Ken'z Tranz</a></li>
                                            <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Rental Mobil Dinas</a></li>
                                            <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Sewa Mobil Dinas</a></li>
                                            <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Sewa Mobil Terpercaya</a></li>
                                        </ul>
                                    </div>
                                </article>
                                <section class="section-reply-form" id="section-reply-form">
                                    <h2 class="ui-title-inner">Leave a<span class="text-primary"> Comment</span></h2>
                                    <form class="form-reply ui-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Your Name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4" placeholder="Comments"></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                                <!-- end .section-reply-form-->
                            </main>
                        </div>
                        <div class="col-lg-3">
                            <aside class="l-sidebar l-sidebar_last">
                                <div class="widget widget-search section-sidebar bg-light">
                                    <div class="widget-title bg-dark">search</div>
                                    <div class="widget-inner">
                                        <form class="form-sidebar" id="search-global-form">
                                            <input class="form-sidebar__input form-control" type="search" placeholder="keyword" />
                                            <button class="form-sidebar__btn"><i class="ic icon-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end .widget-->
                                <section class="widget section-sidebar bg-light">
                                    <h3 class="widget-title bg-dark">recent posts</h3>
                                    <div class="widget-content">
                                        <div class="widget-inner">
                                            <section class="post-widget clearfix">
                                                <div class="post-widget__media"><a href="#"><img class="img-fluid" src="{{ asset('media/image/toyota-duo.JPG') }}" alt="foto" /></a></div>
                                                <div class="post-widget__inner">
                                                    <h2 class="post-widget__title"><a href="#">Sewa Mobil Dinas Terpercaya</a></h2>
                                                    <div class="post-widget__date">
                                                        <time datetime="2019-10-27 15:20">Dec 15, 2018</time>
                                                    </div>
                                                </div>
                                                <!-- end .widget-post-->
                                            </section>
                                            <section class="post-widget clearfix">
                                                <div class="post-widget__media"><a href="blog-post.html"><img class="img-fluid" src="{{ asset('media/image/white-nobg.png') }}" alt="foto" /></a></div>
                                                <div class="post-widget__inner">
                                                    <h2 class="post-widget__title"><a href="blog-post.html">Sewa Mobil Premium untuk Liburan Bersama Pasangan dan Keluarga</a></h2>
                                                    <div class="post-widget__date">
                                                        <time datetime="2019-10-27 15:20">Jan 20, 2019</time>
                                                    </div>
                                                </div>
                                                <!-- end .widget-post-->
                                            </section>
                                            <section class="post-widget clearfix">
                                                <div class="post-widget__media"><a href="blog-post.html"><img class="img-fluid" src="{{ asset('media/image/IMG_6623.webp') }}" alt="foto" /></a></div>
                                                <div class="post-widget__inner">
                                                    <h2 class="post-widget__title"><a href="blog-post.html">Biaya Sewa Mobil di Malang</a></h2>
                                                    <div class="post-widget__date">
                                                        <time datetime="2019-10-27 15:20">Feb 30, 2019</time>
                                                    </div>
                                                </div>
                                                <!-- end .widget-post-->
                                            </section>
                                        </div>
                                    </div>
                                </section>
                                <!-- end .widget-->
                                <section class="widget section-sidebar bg-light">
                                    <h3 class="widget-title bg-dark">tags</h3>
                                    <div class="widget-content">
                                        <div class="widget-inner">
                                            <ul class="list-tags list-unstyled">
                                                <li class="list-tags__item"><a class="list-tags__link" href="{{'home'}}">Ken'z Tranz</a></li>
                                                <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Rental Mobil Dinas</a></li>
                                                <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Sewa Mobil Dinas</a></li>
                                                <li class="list-tags__item"><a class="list-tags__link" href="{{'#'}}">Sewa Mobil Terpercaya</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <!-- end .widget-->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            @include('depan/template/footer')
        </div>
    </div>