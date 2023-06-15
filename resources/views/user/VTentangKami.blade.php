@include('user.template.head')

<body>
    <!-- HEADER-SECTION -->
    <div class="home-header-section ">
        @include('user.template.header')
        <!-- BANNER-SECTION -->
        <div class="home-banner-section overflow-hidden">
            <div class="banner-container-box mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4  text-center">
                            <div class="about-banner-text" data-aos="fade-up">
                                <h1 class="text-white about-h1">Tentang Kami</h1>
                                <p class="text-white text-justify banner-paragraph "><strong>Ken'z Tranz</strong> adalah
                                    penyedia
                                    layanan sewa mobil
                                    (carter mobil / rental
                                    mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis
                                    mobil
                                    yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang
                                    dapat
                                    menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn
                                    facelift
                                    dan Toyota Alpahard . Selain itu Kenz Tranz juga menyediakan beragam paket
                                    wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata
                                    satu
                                    hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di
                                    rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket
                                    wisata
                                    Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan
                                    anda. Kenz Tranz memberikan anda kemudahan dalam melakukan pemesanan
                                    kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai
                                    dengan
                                    yang direncanakan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0">
                            <div class="" data-aos="fade-up">
                                <div class="row justify-content-between">
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <h3 data-aos="zoom-out-left"><span
                                                style="color: var(--e-global-color-btn-red);">Kenz Tranz</span> - Sewa
                                            Mobil</h3>
                                        <p class="text-white text-justify"> Kenz Tranz adalah penyedia layanan sewa
                                            mobil (carter mobil / rental mobil)
                                            LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis
                                            mobil yang di
                                            sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang
                                            dapat menampung
                                            banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn
                                            facelift dan
                                            Toyota Alpahard . Selain itu Kenz Tranz juga menyediakan beragam paket
                                            wisata.
                                            Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata
                                            satu hari, dua
                                            hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di
                                            rekomendasikan
                                            seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata
                                            Kawah Ijen
                                            Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan
                                            anda. Malang
                                            Army Trans memberikan anda kemudahan dalam melakukan pemesanan
                                            kendaraan/paket wisata,
                                            sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang
                                            direncanakan.</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 mx-auto text-center my-auto">
                                        <div class="about-section-img">
                                            <figure class="mb-0"><img
                                                    src="{{ asset('user/images/toyota-road.png ') }}" alt=""
                                                    class="img-fluid banner-img-width">
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
                        <a href="https://wa.me/send?phone=6281332033337&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi."
                            class="btn btn-card text-white">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Sewa paket wisata  -->
    <section class="cyber-security-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 ">
                    <div class="cyber-content-img text-center mx-0 my-0">
                        <figure class="mb-0"><img src="{{ asset('user/images/jeep-bromo.webp') }}" alt=""
                                class="cyber-security-provider-img">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cyber-content">
                        <h3>Paket Wisata - <span class="cyber-text">Kenz Tranz</span></h3>
                        <p class="text-justify text-white">
                            Ingin pergi berwisata ke gunung bromo sendirian? atau rame-rame dengan teman? Berwisata
                            merupakan kebutuhan setiap individu. ada banyak tempat wisata di Kota Malang yang bagus
                            untuk dikunjungi. salah satunya adalah wisata alam Gunung Bromo. Bagi anda yang ingin
                            pergi ke gunung bromo untuk berwisata atau sekedar refreshing, ini adalah saat yang
                            tepat untuk melakukannya. Dalam Paket Wisata Open Trip Bromo Termurah anda dapat
                            melakukan kegiatan berwisata dengan teman baru yang sangat menyenangkan dengan kegiatan
                            yang dapat dilakukan secara terjadwal. Selain itu anda juga akan ditemani oleh team yang
                            baik dan berpengalaman dalam bidangnya. Dengan destinasi wisata:
                        </p>
                        <ul class="text-justify text-white">
                            <li>Penanjakan Bromo</li>
                            <li>Bukit Widodaren Bromo</li>
                            <li>Kawah Bromo</li>
                            <li>Pasir Berbisik</li>
                            <li>Bukit Teletubies</li>
                        </ul>
                        <p class="text-justify text-white">
                            Dengan harga paket wisata Rp. 350.000 / Orang Untuk Tata Cara Pemesanan anda dapat
                            menghubungi nomor yang tertera atau melakukan pemesanan dengan cara klik <a
                                href="{{ 'paket-wisata' }}">“PESAN
                                SEKARANG”</a> pada halaman Paket Wisata. Bagi anda yang ingin melakukan wisata
                            selain Bromo
                            juga dapat memilih paket hemat kami lainnya di halaman Paket Wisata.
                        </p>
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
