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
                        <img class="sp-image d-block w-100" src="{{ asset('media/image/main-car.png') }}"
                            alt="slider" />
                        <div class="main-slider__wrap">
                            <div class="main-slider__wrap_slogan mt-1">
                                <div class="sp-layer" data-width="100%" data-show-transition="left"
                                    data-hide-transition="left" data-show-duration="800" data-show-delay="400"
                                    data-hide-delay="400">
                                    <div class="main-slider__slogan">Ken'z Tranz for Effortless Journeys!</div>
                                    <div class="main-slider__title">Sewa Mobil</div>
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
            <section class="b-featured section-default bg-grey mb-5">
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
            <section class="section-area mt-5 section-default">
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
            </section>
            <section class="section-area section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="rounded" src="{{ asset('media/image/nature.webp') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-green rounded">
                                <div class="card-body text-center text-white">
                                    <h3 class="mt-5">Paket Wisata</h3>
                                    <p class="mt-4 fs-20">Bagi Anda yang sedang mencari paket wisata dengan harga
                                        terjangkau dan pelayanan
                                        berkualitas bisa melihat harga yang kami tawarkan.
                                    </p>
                                    <a class="mt-4 btn btn-secondary" href="{{ 'paket-wisata' }}"><i
                                            class="fa-solid fa-right-to-bracket mr-2"></i>Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('depan/template/footer')
        </div>
    </div>
</body>
