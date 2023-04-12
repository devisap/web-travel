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
                        <img class="sp-image d-block w-100" src="{{ asset('media/image/main-car.webp') }}"
                            alt="slider" />
                        <div class="main-slider__wrap">
                            <div class="main-slider__wrap_slogan mt-1">
                                <div class="sp-layer" data-width="100%" data-show-transition="left"
                                    data-hide-transition="left" data-show-duration="800" data-show-delay="400"
                                    data-hide-delay="400">
                                    <div class="main-slider__slogan">Ken'z Tranz for Effortless Journeys!</div>
                                    <div class="main-slider__title">Sewa Mobil<br>
                                        <h2>Premium Malang</h2>
                                    </div>
                                    <div class="text-center">
                                        <div class="main-slider__slogan_after">Kami menyewakan mobil premium <br> dan
                                            luxury car dengan harga sewa <br> mobil termurah <br> di Malang dan
                                            sekitarnya
                                        </div>
                                    </div>
                                    <a class=" btn btn-primary" href="">Lihat Harga Sewa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .main-slider-->
            <div class="section-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="b-find">
                                <div class="b-find-content tab-content" id="findTabContent">
                                    <div class="tab-pane fade show active" id="content-allCar">
                                        <div class="b-find__form text-center fs-20">
                                            <p>Ken'zTranz mempermudah Anda untuk keperluan transportasi. Melayani
                                                sewa mobil luxury dan premium car dalam atau luar kota dengan berbagai
                                                armada yang ada dengan kapasitas yang berbeda beda. Sewa mobil
                                                innova, hiace commuter dan hiace premium tersedia untuk anda yang ingin
                                                berpergian dengan kapasitas yang besar dan eksklusif.
                                            </p>
                                            <section class="section-carousel">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="section-carousel__inner">
                                                                <div class="js-slider vh-slider"
                                                                    data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                                                                    <div class="b-goods-f ">
                                                                        <div class="b-goods-f__media"><img
                                                                                class="b-goods-f__img img-scale"
                                                                                style="max-width: 300px;max-height: 350px;min-width: 300px;min-height: 350px"
                                                                                src="{{ asset('media/image/black-car.webp') }}"
                                                                                alt="foto" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="b-goods-f ">
                                                                        <div class="b-goods-f__media"><img
                                                                                class="b-goods-f__img img-scale"
                                                                                style="max-width: 300px;max-height: 350px;min-width: 300px;min-height: 350px"
                                                                                src="{{ asset('media/image/IMG_7067.webp') }}"
                                                                                alt="foto" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="b-goods-f ">
                                                                        <div class="b-goods-f__media"><img
                                                                                class="b-goods-f__img img-scale"
                                                                                style="max-width: 300px;max-height: 350px;min-width: 300px;min-height: 350px"
                                                                                src="{{ asset('media/image/white-car.webp') }}"
                                                                                alt="foto" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="b-goods-f ">
                                                                        <div class="b-goods-f__media"><img
                                                                                class="b-goods-f__img img-scale"
                                                                                style="max-width: 300px;max-height: 350px;min-width: 300px;min-height: 350px"
                                                                                src="{{ asset('media/image/white-car.webp') }}"
                                                                                alt="foto" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .b-find-->
            <section class="b-welcome section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 text-slogan">
                            <h3 class="ui-title title-decore"> Kenapa memilih kami ?</h3>
                            <ul class="b-steps-list list-unstyled">
                                <li class="row">
                                    <div class="col-3">
                                        <span class="b-steps-list__number">01</span>
                                    </div>
                                    <div class="col">
                                        <div class="b-steps-list__title">Mobil Terawat</div>
                                        <div class="b-steps-list__info text-justify">Kami selalu menjaga performa serta
                                            kebersihan dari mobil yang kami tawarkan dengan melakukan service secara
                                            berkala</div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span class="b-steps-list__number">02</span>
                                    </div>
                                    <div class="col">
                                        <div class="b-steps-list__title">Driver Profesional</div>
                                        <div class="b-steps-list__info text-justify">Driver yang kami miliki tentunya
                                            memiliki
                                            pegalaman dibidangnya, serta mengutamakan sikap ramah terhadap customer
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span class="b-steps-list__number">03</span>
                                    </div>
                                    <div class="col">
                                        <div class="b-steps-list__title">Harga Termurah</div>
                                        <div class="b-steps-list__info text-justify">Harga untuk sewa mobil dan paket
                                            wisata yang
                                            kami tawarkan sangat terjangkau sesuai dengan fasilitas yang memuaskan
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span class="b-steps-list__number">04</span>
                                    </div>
                                    <div class="col">
                                        <div class="b-steps-list__title">Tepat Waktu</div>
                                        <div class="b-steps-list__info text-justify">Kami sangat menghargai waktu Anda,
                                            maka dari
                                            itu kami mengusahakan tidak adanya keterlambatan</div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-3">
                                        <span class="b-steps-list__number">05</span>
                                    </div>
                                    <div class="col">
                                        <div class="b-steps-list__title">Pemesanan Mudah & Cepat</div>
                                        <div class="b-steps-list__info text-justify">Anda bisa melakukan pemesanan
                                            dengan mudah
                                            melalui website dan sosial media kami. Atau bisa langsung menghubungi
                                            nomor yang tertera pada website ini</div>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="col-xl-5">
                            <img class="home-welcome d-block w-100 rounded" style="max-height: 600px;"
                                src="{{ asset('media/image/black-car.webp') }}" alt="welcome">
                            <div class="text-center">
                                <a class="btn btn-primary mt-5 text-center btn-lg"
                                    href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkinAnda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil2. Transportasi VIP3. Perjalanan Dinas4. Acara Keluarga5. Pelayanan Tour Wisata6. Pernikahan7. Dan lain sebagainyaKami menyediakan armada terbaru yang bersih dan wangi. Untuk info lebih detail bisa akses website official kami : *https://kenztranz.com/*">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-featured section-default bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center text-slogan">
                            <h3 class="ui-title title-decore"> Daftar Harga Sewa Mobil Premium</h3>
                            <div class="h10"></div>
                            <div class="h10"></div>
                            <div class="h10"></div>
                            <div class="h10"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fbox fbox-even">
                                <span class="b-goods-f__label bg-green ">Rp 600.000</span>
                                <div class="img-box">
                                    <img class="w-100" src="{{ asset('media/image/inova-reborn.png') }}"
                                        style="width: 100%; max-height: 250px;min-height: 250px" alt="">
                                </div>
                                <h4>Inova Reborn</h4>
                                <div class="fbox_info text-left">
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Include Mobil & Driver</p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Harga <strong>per
                                            Hari</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i><strong>Excelent
                                            Service</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk BBM</p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk Tol &
                                        Parkir</p>
                                </div>
                                <div class="mt-4 text-left">
                                    <p class="note">Note</p>
                                    <p class="note">*Harga khusus untuk wilayah Malang & Batu</p>
                                    <p class="note">*Tidak menerima <b>Lepas Kunci</b></p>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Saya berminat sewa *Inova Reborn* Atas nama: Tanggal pemakaian: Bulan: Durasi Sewa :">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fbox fbox-even">
                                <span class="b-goods-f__label bg-green ">Rp 900.000</span>
                                <div class="img-box">
                                    <img class="w-100" src="{{ asset('media/image/hiace.png') }}"
                                        style="width: 100%; max-height: 250px;min-height: 250px" alt="">
                                </div>
                                <h4>Toyota Hiace</h4>
                                <div class="fbox_info text-left">
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Include Mobil & Driver</p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Harga <strong>per
                                            Hari</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i><strong>Excelent
                                            Service</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk BBM</p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk Tol &
                                        Parkir</p>
                                </div>
                                <div class="mt-4 text-left">
                                    <p class="note">Note</p>
                                    <p class="note">*Harga khusus untuk wilayah Malang & Batu</p>
                                    <p class="note">*Tidak menerima <b>Lepas Kunci</b></p>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Saya berminat sewa *Toyota Hiace* Atas nama: Tanggal pemakaian: Bulan: Durasi Sewa :">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fbox fbox-even">
                                <span class="b-goods-f__label bg-green ">Rp 850.000</span>
                                <div class="img-box">
                                    <img class="w-100" src="{{ asset('media/image/elf-long.png') }}"
                                        style="width: 100%; max-height: 250px;min-height: 250px" alt="">
                                </div>
                                <h4>Elf Long</h4>
                                <div class="fbox_info text-left">
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Include Mobil & Driver</p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Harga <strong>per
                                            Hari</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i><strong>Excelent
                                            Service</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk BBM</p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk Tol &
                                        Parkir</p>
                                </div>
                                <div class="mt-4 text-left">
                                    <p class="note">Note</p>
                                    <p class="note">*Harga khusus untuk wilayah Malang & Batu</p>
                                    <p class="note">*Tidak menerima <b>Lepas Kunci</b></p>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Saya berminat sewa *Elf Long* Atas nama: Tanggal pemakaian: Bulan: Durasi Sewa :">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fbox fbox-even">
                                <span class="b-goods-f__label bg-green ">Rp 400.000</span>
                                <div class="img-box">
                                    <img class="w-100" src="{{ asset('media/image/avanza.png') }}"
                                        style="width: 100%; max-height: 250px;min-height: 250px" alt="">
                                </div>
                                <h4>Mobilio / Ertiga / Avanza</h4>
                                <div class="fbox_info text-left">
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Include Mobil & Driver</p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i>Harga <strong>per
                                            Hari</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-check mr-2"></i><strong>Excelent
                                            Service</strong></p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk BBM</p>
                                    <p class="mb-5px"><i class="fa-solid fa-xmark mr-2"></i>Tidak termasuk Tol &
                                        Parkir</p>
                                </div>
                                <div class="mt-4 text-left">
                                    <p class="note">Note</p>
                                    <p class="note">*Harga khusus untuk wilayah Malang & Batu</p>
                                    <p class="note">*Tidak menerima <b>Lepas Kunci</b></p>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Saya berminat sewa *Mobilio / Ertiga / Avanza* Atas nama: Tanggal pemakaian: Bulan: Durasi Sewa :">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="b-share section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-3"></div>
                        <div class="ol-md-12 col-lg-6 text-center text-slogan">
                            <h3 class="ui-title title-decore"> Testimoni Klien Kami</h3>
                            <div class="h10"></div>
                            <div class="h10"></div>
                            <div class="h10"></div>
                            <div class="h10"></div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="gallery__share">
                                        <div class="gallery__wrapper">
                                            <ul class="gallery__items">
                                                <li class="gallery__item row-1"><a href="#"><img
                                                            src="{{ asset('media/image/IMG_6132.webp') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                                <li class="gallery__item row-1"><a href="#"><img
                                                            src="{{ asset('media/image/IMG_6623.webp') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                                <li class="gallery__item row-1"><a href="#"><img
                                                            src="{{ asset('media/image/IMG_7067.webp') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                                <li class="gallery__item row-1 "><a href="#"><img
                                                            src="{{ asset('media/image/toyota-duo.JPG') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                            </ul>
                                            <ul class="gallery__items">
                                                <li class="gallery__item row-1"><a href="#"><img
                                                            src="{{ asset('media/image/IMG_9154.webp') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                                <li class="gallery__item row-2">
                                                    <div class="b-reviews-slider-2 js-slider">
                                                        <div class="b-reviews-2">
                                                            <blockquote class="b-reviews-2__blockquote">
                                                                <div class="b-reviews-2__wrap">
                                                                    <p>Pelayanan sangat bagus, driver santun dan ramah,
                                                                        mobil sangat nyaman</p>
                                                                </div>
                                                                <div class="b-reviews-2__cite"
                                                                    title="Blockquote Title">
                                                                    <span class="b-reviews-2__name">Farhan Halim -
                                                                        Malang</span>
                                                                    <div class="slider-review-stars">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="b-reviews-2">
                                                            <blockquote class="b-reviews-2__blockquote">
                                                                <div class="b-reviews-2__wrap">
                                                                    <p>Kendaraan sesuai pesanan, baik, nyaman, bersih,
                                                                        penjemputan tepat waktu Driver profesional,
                                                                        melayani dengan baik pokoknya memuaskan deh </p>
                                                                </div>
                                                                <div class="b-reviews-2__cite"
                                                                    title="Blockquote Title">
                                                                    <span class="b-reviews-2__name">Tina Sumiati -
                                                                        Dau</span>
                                                                    <div class="slider-review-stars">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="b-reviews-2">
                                                            <blockquote class="b-reviews-2__blockquote">
                                                                <div class="b-reviews-2__wrap">
                                                                    <p>Respon operator cepat, mobil bagus, bersih,
                                                                        terawat, drivernya baik banget, pengalaman,
                                                                        nyetir sopan dan safety. Recommended buat
                                                                        sewa lagi dan tingkatkan terus pelayanannya
                                                                        ya...
                                                                        Makasih banyak sudah membantu
                                                                    </p>
                                                                </div>
                                                                <div class="b-reviews-2__cite"
                                                                    title="Blockquote Title">
                                                                    <span class="b-reviews-2__name">Dimas Suhendro -
                                                                        Wagir</span>
                                                                    <div class="slider-review-stars">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                        <div class="b-reviews-2">
                                                            <blockquote class="b-reviews-2__blockquote">
                                                                <div class="b-reviews-2__wrap">
                                                                    <p>rekomendasi banget ini.. wisata di malang
                                                                        menyenangkan dengan driver yg ramah.. sukses
                                                                        selalu
                                                                        Kenz Tranz. nanti kalau liburan pasti saya
                                                                        hubungi. Terima kasih</p>
                                                                </div>
                                                                <div class="b-reviews-2__cite"
                                                                    title="Blockquote Title">
                                                                    <span class="b-reviews-2__name">Anugrah Tribeti -
                                                                        Malang</span>
                                                                    <div class="slider-review-stars">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gallery__item row-1 "><a href="#"><img
                                                            src="{{ asset('media/image/toyota-duo.JPG') }}"
                                                            alt="gallery image" class="gallery__image"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-share section-default bg-grey" style="margin-top: -75px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <section class="b-post b-post-full clearfix">
                                <div class="entry-media">
                                    <a class="js-zoom-images" href="{{ asset('media/image/toyota-duo.JPG') }}">
                                        <img class="img-fluid" src="{{ asset('media/image/toyota-duo.JPG') }}"
                                            style="width: 100%; max-height: 300px;min-height: 300px" alt="Foto" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-meta">
                                        <div class="entry-date bg-primary">
                                            <span class="entry-date__month">25</span>
                                            <span class="entry-date__month">DEC</span>
                                            <span class="entry-date__month">2023</span>
                                        </div>
                                        <span class="entry-meta__item"><a class="entry-meta__link"
                                                href="{{ 'berita' }}"><i class="fa-regular fa-user mr-2"></i>by
                                                Admin</a>
                                        </span>
                                    </div>
                                    <div class="entry-header">
                                        <h3 class="entry-title">Sewa Mobil Dinas Terpercaya</h3>
                                    </div>
                                    <div class="entry-content">
                                        <p>Kami menyediakan sewa mobil dinas untuk instansi yang ingin melakukan
                                            perjalanan dinas baik dalam kota maupun luar kota dengan pelayanan VVIP.
                                            Keberadaan mobil dinas bisa dikatakan sangat penting guna meningkatkan ....
                                        </p>
                                    </div>
                                    <div class="entry-footer"> <a class="entry-link btn btn-default btn-sm"
                                            href="{{'artikel'}}">Baca Selengkapnya</a> </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4">
                            <section class="b-post b-post-full clearfix">
                                <div class="entry-media">
                                    <a class="js-zoom-images" href="{{ asset('media/image/white-nobg.png') }}">
                                        <img class="img-fluid" src="{{ asset('media/image/white-nobg.png') }}"
                                            style="width: 100%; max-height: 300px;min-height: 300px" alt="Foto" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-meta">
                                        <div class="entry-date bg-primary">
                                            <span class="entry-date__month">25</span>
                                            <span class="entry-date__month">DEC</span>
                                            <span class="entry-date__month">2023</span>
                                        </div>
                                        <span class="entry-meta__item"><a class="entry-meta__link"
                                                href="{{ 'berita' }}"><i class="fa-regular fa-user"></i>by
                                                Admin</a>
                                        </span>
                                    </div>
                                    <div class="entry-header">
                                        <h3 class="entry-title">Sewa Mobil Premium untuk Liburan Bersama Pasangan dan
                                            Keluarga</h3>
                                    </div>
                                    <div class="entry-content">
                                        <p>Liburan bersama pasangan dan keluarga lebih praktis dan nyaman menggunakan
                                            mobil. Bepergian ke mana pun bisa lebih bebas, terlebih bila Anda sewa mobil
                                            premium beserta supirnya. Anda pun bisa menikmati ....
                                        </p>
                                    </div>
                                    <div class="entry-footer"> <a class="entry-link btn btn-default btn-sm"
                                            href="{{'artikel'}}">Baca Selengkapnya</a> </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4">
                            <section class="b-post b-post-full clearfix">
                                <div class="entry-media">
                                    <a class="js-zoom-images" href="{{ asset('media/image/IMG_6623.webp') }}">
                                        <img class="img-fluid" src="{{ asset('media/image/IMG_6623.webp') }}"
                                            style="width: 100%; max-height: 300px;min-height: 300px" alt="Foto" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-meta">
                                        <div class="entry-date bg-primary">
                                            <span class="entry-date__month">25</span>
                                            <span class="entry-date__month">DEC</span>
                                            <span class="entry-date__month">2023</span>
                                        </div>
                                        <span class="entry-meta__item"><a class="entry-meta__link"
                                                href="{{ 'berita' }}"><i class="fa-regular fa-user"></i>by
                                                Admin</a>
                                        </span>
                                    </div>
                                    <div class="entry-header">
                                        <h3 class="entry-title">Biaya Sewa Mobil di Malang</h3>
                                    </div>
                                    <div class="entry-content">
                                        <p>Biaya sewa mobil di Malang bervariasi tergantung pada jenis mobil yang ingin
                                            disewa, lama waktu sewa, dan juga fasilitas yang disediakan oleh perusahaan
                                            penyewaan mobil ....
                                        </p>
                                    </div>
                                    <div class="entry-footer"> <a class="entry-link btn btn-default btn-sm"
                                            href="{{'artikel'}}">Baca Selengkapnya</a> </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>
            <div class="section-area mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="b-find">
                                <div class="b-find-content tab-content" id="findTabContent">
                                    <div class="tab-pane fade show active bg-dark" id="content-allCar">
                                        <div class="b-find__form text-left text-white" style="font-size: 20px">
                                            <h3>Sewa Mobil Premium Malang</h3>
                                            <div class="row justify-content-center">
                                                <div class="col-8 ">
                                                    <p>Jika Anda tidak menemukan armada yang cocok , Anda bisa
                                                        menghubungi admin kami. Dapatkan sewa mobil malang dengan
                                                        kualitas armada yang baik, harga terjangkau dan pelayanan
                                                        berkualitas</p>
                                                </div>
                                                <div class="col">
                                                    <a class="btn my-auto btn-primary mt-5 text-center btn-lg"
                                                        href="https://api.whatsapp.com/send?phone=6285732694267&text=https://api.whatsapp.com/send?phone=6282131554720&text=Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkinAnda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil2. Transportasi VIP3. Perjalanan Dinas4. Acara Keluarga5. Pelayanan Tour Wisata6. Pernikahan7. Dan lain sebagainyaKami menyediakan armada terbaru yang bersih dan wangi. Untuk info lebih detail bisa akses website official kami : *https://kenztranz.com/*">
                                                        <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
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
            @include('depan/template/footer')
        </div>
    </div>
</body>