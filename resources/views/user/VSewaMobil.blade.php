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
                                    <a href="https://api.whatsapp.com/send?phone=6281332033337&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi." class="text-decoration-none">Hubungi Kami</a>
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
                                                            class="text-success">650.000/hari</b></p>
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
                                                            src="{{ asset('user/images/inova-reborn.png ') }}"
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
                                                        Kapasitas Max. 9 orang
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
                                                            src="{{ asset('user/images/elf-long.png ') }}"
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
                                                            src="{{ asset('user/images/mobilio.png ') }}"
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
                                                            src="{{ asset('user/images/ertiga.png ') }}"
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
                                                            src="{{ asset('user/images/avanza.png ') }}"
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
   
    @include('user.template.footer')
    <div id="example"></div>
</body>
<script type="text/javascript">
    whatsappchat.multipleUser({
        selector: "#example",
        users: [{
                name: "CS Diah Sukma",
                phone: "6281332033337",
                designation: "Konsultasi Pemesanan",
                image: "user/floating-wa/icons8-whatsapp-64.svg",
            },
            {
                name: "CS Henry",
                phone: "6282139077771",
                designation: "Konsultasi Pemesanan",
                image: "user/floating-wa/icons8-whatsapp-64.svg",
            },
        ],
        headerMessage: "Hi! Click one of our member below to chat on <strong>Whatsapp</strong> <br> ",
        chatBoxMessage: "Admin kami akan membalas dalam beberapa saat",
        color: "#25D366",
    });
</script>
</html>
