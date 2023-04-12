@include('depan.template.header')

<body class="page">
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        @include('depan.template.navmobile')
        <div data-canvas="container">
            @include('depan.template.navbar')
            <div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="650px"
                data-slider-arrows="false" data-slider-buttons="false">
                <div class="sp-slides">
                    <!-- Slide 1-->
                    <div class="main-slider__slide sp-slide">
                        <img class="sp-image d-block w-100" src="{{ asset('media/image/gunung.webp') }}"
                            alt="slider" />
                        <div class="main-slider__wrap">
                            <div class="main-slider__wrap_slogan mt-1">
                                <div class="sp-layer" data-width="100%" data-show-transition="left"
                                    data-hide-transition="left" data-show-duration="800" data-show-delay="400"
                                    data-hide-delay="400">
                                    <div class="main-slider__slogan">Ken'z Tranz for Effortless Journeys!</div>
                                    <div class="main-slider__title">Tentang Kami<br></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="b-featured section-default ">
                <div class="container h-100">
                    <div class="row">
                        <div class="col">
                            <p class="text-justify fs-18">
                                <strong>Ken'z Tranz</strong> adalah penyedia layanan sewa mobil (carter mobil / rental
                                mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil
                                yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat
                                menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift
                                dan Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket
                                wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu
                                hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di
                                rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata
                                Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan
                                anda. Malang Army Trans memberikan anda kemudahan dalam melakukan pemesanan
                                kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai dengan
                                yang direncanakan.
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('media/image/IMG_6623.webp') }}" class="img-scale mb-5">
                        </div>
                    </div>
                    <div class="text-center card bg-green rounded">
                        <h3 class="text-white pt-2"><strong>Ken'z Tranz - Sewa Mobil</strong></h3>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <img src="{{ asset('media/image/toyota-road.png') }}" class="img-scale mb-5">

                        </div>
                        <div class="col mb-5">
                            <p class="text-justify fs-18">
                                Malang Army Trans adalah penyedia layanan sewa mobil (carter mobil / rental mobil)
                                LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil yang di
                                sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat menampung
                                banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift dan
                                Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket wisata.
                                Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu hari, dua
                                hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di rekomendasikan
                                seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata Kawah Ijen
                                Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan anda. Malang
                                Army Trans memberikan anda kemudahan dalam melakukan pemesanan kendaraan/paket wisata,
                                sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang direncanakan.
                            </p>
                        </div>
                    </div>
                    <div class="text-center card bg-green rounded">
                        <h3 class="text-white pt-2"><strong>Ken'z Tranz - Paket Wisata</strong></h3>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <p class="text-justify fs-18">
                                Ingin pergi berwisata ke gunung bromo sendirian? atau rame-rame dengan teman? Berwisata
                                merupakan kebutuhan setiap individu. ada banyak tempat wisata di Kota Malang yang bagus
                                untuk dikunjungi. salah satunya adalah wisata alam Gunung Bromo. Bagi anda yang ingin
                                pergi ke gunung bromo untuk berwisata atau sekedar refreshing, ini adalah saat yang
                                tepat untuk melakukannya. Dalam Paket Wisata Open Trip Bromo Termurah anda dapat
                                melakukan kegiatan berwisata dengan teman baru yang sangat menyenangkan dengan kegiatan
                                yang dapat dilakukan secara terjadwal. Selain itu anda juga akan ditemani oleh team yang
                                baik dan berpengalaman dalam bidangnya. Dengan destinasi wisata:
                            </p>
                            <ul class="text-justify fs-18">
                                <li>Penanjakan Bromo</li>
                                <li>Bukit Widodaren Bromo</li>
                                <li>Kawah Bromo</li>
                                <li>Pasir Berbisik</li>
                                <li>Bukit Teletubies</li>
                            </ul>
                            <p class="text-justify fs-18">
                                Dengan harga paket wisata Rp. 350.000 / Orang Untuk Tata Cara Pemesanan anda dapat
                                menghubungi nomor yang tertera atau melakukan pemesanan dengan cara klik <a
                                    href="{{'paket-wisata'}}">“PESAN
                                    SEKARANG”</a> pada halaman Paket Wisata. Bagi anda yang ingin melakukan wisata
                                selain Bromo
                                juga dapat memilih paket hemat kami lainnya di halaman Paket Wisata.
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('media/image/jeep-bromo.webp') }}" class="img-scale mb-5">
                        </div>
                    </div>

                </div>
            </section>
            @include('depan/template/footer')
        </div>
    </div>
</body>
