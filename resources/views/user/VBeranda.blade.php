@include('user.template.head')

<body>
    <!-- HEADER-SECTION -->
    <div class="home-header-section">
        @include('user.template.header')
        <!-- BANNER-SECTION -->
        <div class="home-banner-section overflow-hidden">
            <div class="banner-container-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                            <div class="home-banner-text" data-aos="fade-up">
                                {{-- <h5 class="text-white artificial-text">Cyber Security Solutions for</h5> --}}
                                <h1 class="text-white"> Sewa Mobil Malang
                                </h1>
                                {{-- <p class="text-white banner-paragraph">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusm tempor
                                    incididunt ut labore et dolore magna aliqua.</p> --}}
                                <div class="banner-btn discover-btn-banner">
                                    <a href="#" class="text-decoration-none">Lihat Harga Sewa</a>
                                </div>
                            </div>
                            {{-- <div class="social-icons" data-aos="zoom-out-left">
                                <ul class="list-unstyled">
                                    <li><a class="text-decoration-none" href="#"><i class="fa-regular fa-horizontal-rule"></i></a></li>
                                    <li><a href="" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                                    <li><a href="" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                                    <li><a href="" class="text-decoration-none"><i class="fa-brands fa-linkedin-in social-networks"></i></a></li>
                                    <li><a href="" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="banner-img-content position-relative" data-aos="fade-up">
                                <figure class="banner-img mb-0 wow slideInRight" data-wow-duration="2s">
                                    <img class="img-fluid banner-img-width" src="{{ asset('user/images/toyota.png ') }}"
                                        alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KENZ TRANZ SECTION -->
    {{-- <section class="icons-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center p-0 text-justify" data-aos="fade-zoom-in">Ken'zTranz mempermudah Anda untuk
                        keperluan transportasi. Melayani sewa mobil luxury dan premium car dalam atau luar kota dengan
                        berbagai armada yang ada dengan kapasitas yang berbeda beda. Sewa mobil innova, hiace commuter
                        dan hiace premium tersedia untuk anda yang ingin berpergian dengan kapasitas yang besar dan
                        eksklusif.</h5>
                </div>
            </div>
            <div class="row">
                <div class="cards-section overflow-hidden">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                                <div class="outer-padding-left  outer-card1" data-aos="fade-up">
                                    <img class="img-fluid banner-img-width"
                                        src="{{ asset('user/images/black-car.webp') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                                <div class="outer-padding-left outer-card2" data-aos="fade-up">
                                    <img class="img-fluid banner-img-width"
                                        src="{{ asset('user/images/IMG_7067.webp') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center"
                                data-aos="fade-up">
                                <div class="outer-padding-left  outer-card3">
                                    <img class="img-fluid banner-img-width"
                                        src="{{ asset('user/images/white-car.webp') }}" alt="" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- kenapa memilih kami  --}}
    <div class="content-2-1 container-xxl mx-auto p-0 position-relative">
        <div class="text-center title-text">
            <div class="col-12">
                <h3 class="text-center text-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Kenapa
                    Memilih Kami ?</h3>
            </div>
        </div>
        <div class=" overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="cards-outer outer-card1" data-aos="fade-up">
                            <h6 class="heading-background">Mobil Terawat</h6>
                            <p class="card-heading-p vertical-bar-line mt-2">Kami selalu menjaga performa serta
                                kebersihan
                                dari mobil yang kami tawarkan dengan melakukan service secara berkala</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="cards-outer outer-card1" data-aos="fade-up">
                            <h6 class="heading-background">Driver Profesional</h6>
                            <p class="card-heading-p vertical-bar-line mt-2">Driver yang kami miliki tentunya memiliki
                                pegalaman dibidangnya, serta mengutamakan sikap ramah terhadap customer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="cards-outer outer-card1" data-aos="fade-up">
                            <h6 class="heading-background">Harga Termurah</h6>
                            <p class="card-heading-p vertical-bar-line mt-2">Harga untuk sewa mobil dan paket wisata
                                yang kami tawarkan sangat
                                terjangkau sesuai dengan fasilitas yang memuaskan</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="cards-outer outer-card1" data-aos="fade-up">
                            <h6 class="heading-background">Tepat Waktu</h6>
                            <p class="card-heading-p vertical-bar-line mt-2">Kami sangat menghargai waktu Anda, maka
                                dari itu kami mengusahakan
                                tidak adanya keterlambatan</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-4 text-md-left text-center">
                        <div class="cards-outer outer-card1" data-aos="fade-up">
                            <h6 class="heading-background">Pemesanan Mudah & Cepat</h6>
                            <p class="card-heading-p vertical-bar-line mt-2">Anda bisa melakukan pemesanan dengan mudah
                                melalui website dan
                                sosial media kami. Atau bisa langsung menghubungi nomor yang tertera pada website ini
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="card">
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <div class="me-lg-3">
                        <img src="{{ asset('user/images/15.png ') }}" alt="" width="100px" />
                    </div>
                    <div class="flex-grow-1 text-lg-start text-center card-text">
                        <h3 class="card-title">
                            Sewa Mobil Premium Malang
                        </h3>
                        <p class="card-caption">
                            Hubungi marketing kami untuk mendapatkan penawaran terbaik
                        </p>
                    </div>
                    <div class="card-btn-space">
                        <a href="https://api.whatsapp.com/send?phone=6281332033337&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi." class="btn btn-card text-white">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Accordian-Section -->
    <section class="cyber-security-section accordian-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cyber-content accordian-text" data-aos="fade-up">
                        <h3 class="text-center mt-4">Daftar Harga Sewa Mobil Premium</h3>
                        <div class="accordian-inner">
                            <div id="accordion1">
                                <div class="accordion-card">
                                    <div class="" id="headingOne">
                                        <a href="#" class="btn btn-link text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <h5 class="faq-btn-text">Inova Reborn</h5>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class=" collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion1">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                    <p class="text-left text-secondary fs-note">
                                                        Note 
                                                        <br>
                                                        *Harga khusus untuk wilayah Malang & Batu
                                                        <br>
                                                        *Tidak menerima Lepas Kunci
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingTwo">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <h5 class="faq-btn-text">Toyota Hiace</h5>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                    <p class="text-left text-secondary fs-note">
                                                        Note 
                                                        <br>
                                                        *Harga khusus untuk wilayah Malang & Batu
                                                        <br>
                                                        *Tidak menerima Lepas Kunci
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingThree">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <h5 class="faq-btn-text">Elf Long</h5>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                    <p class="text-left text-secondary fs-note">
                                                        Note 
                                                        <br>
                                                        *Harga khusus untuk wilayah Malang & Batu
                                                        <br>
                                                        *Tidak menerima Lepas Kunci
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 5 --}}
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingFour">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            <h5 class="faq-btn-text">Mobilio</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordion2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                    <p class="text-left text-secondary fs-note">
                                                        Note 
                                                        <br>
                                                        *Harga khusus untuk wilayah Malang & Batu
                                                        <br>
                                                        *Tidak menerima Lepas Kunci
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 5  --}}
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingFive">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                                            aria-controls="collapseFive">
                                            <h5 class="faq-btn-text">Ertiga</h5>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#accordion2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                    <p class="text-left text-secondary fs-note">
                                                        Note 
                                                        <br>
                                                        *Harga khusus untuk wilayah Malang & Batu
                                                        <br>
                                                        *Tidak menerima Lepas Kunci
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cyber-content accordian-text">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="" id="headingSix">
                                        <a href="#" class="btn btn-link collapsed text-decoration-none"
                                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            <h5 class="faq-btn-text">Avanza</h5>
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                        data-parent="#accordion2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <p class="text-left text-white fs-10">Harga Sewa: <b
                                                            class="text-success">725.000/hari</b></p>
                                                    <p class="text-left text-white fs-10">Full Day (Max pukul 22.00)
                                                        Include Mobil, Driver, BBM
                                                        Exclude Parkir & Makan Driver
                                                        Rute Dalam Kota Malang / Batu
                                                        Kapasitas Max. 6 orang
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col my-auto">
                                                <div class="card-body ">
                                                    <figure class="banner-img mb-0 wow slideInRight"
                                                        data-wow-duration="2s">
                                                        <img class="img-fluid "
                                                            src="{{ asset('user/images/toyota.png ') }}"
                                                            alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTIMONI -->
    <div class="content-2-1 container-xxl mx-auto p-0 position-relative">
        <div class="text-center title-text">
            <div class="col-12">
                <h3 class="text-center text-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    Testimoni Kami</h3>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="container">
                <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
                    <div id="blog" class="three-column col-xl-12" data-aos="fade-up">
                        <div class="row justify-content-center mx-0 my-0">
                            <div class="col-xl-4 col-lg-4">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div id="testimoni" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('user/images/testimoni2.png ') }}"
                                                        alt=""
                                                        style="width: 100%; min-width: 300px; min-height: 400px; !important" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('user/images/testimoni1.png ') }}"
                                                        alt=""
                                                        style="width: 100%; min-width: 300px; min-height: 400px; !important" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('user/images/testimoni.png ') }}"
                                                        alt=""
                                                        style="width: 100%; min-width: 300px; min-height: 400px; !important" />
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#testimoni" data-slide="prev">
                                                <span
                                                    class="carousel-control-prev-icon --e-global-color-btn-red"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#testimoni" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs-Section -->
    <section class="blog-posts overflow-hidden">
        <div class="text-center title-text">
            <div class="col-12">
                <h3 class="text-center text-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Artikel
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
                <div id="blog" class="three-column col-xl-12" data-aos="fade-up">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div id="artikel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img src="{{ asset('user/images/toyota.png ') }}" alt="" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('user/images/avanza.png ') }}" alt="" />
                                            </div>
                                            <div class="carousel-item active">
                                                <img src="{{ asset('user/images/black-car.webp ') }}"
                                                    alt="" />
                                            </div>
                                        </div>

                                        <a class="carousel-control-prev" href="#artikel" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#artikel" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                    <span class="post-meta-category"><a href="#">Travel</a></span>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"> Jan 21, 2017 </span>
                                        <h2>
                                            <a href="#">Judul Artikel</a>
                                        </h2>
                                        <p>
                                            Curabitur pulvinar euismod ante, ac sagittis ante
                                            posuere ac. Vivamus luctus commodo dolor porta feugiat.
                                            Fusce at velit id ligula ac sagittis ante posuere ac
                                            pharetra laoreet commodo dolor porta.
                                        </p>
                                        <a href="#" class="item-link text-decoration-none">Baca Selengkapnya <i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('user.template.footer')
</body>

</html>
