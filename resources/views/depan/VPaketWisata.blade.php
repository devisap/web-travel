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
                                    <div class="main-slider__title">Paket Wisata<br></div>
                                    <div class="text-center">
                                        <div class="main-slider__slogan_after">Paket wisata dengan harga <br> terjangkau
                                            dan
                                            pelayanan berkualitas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="b-featured section-default bg-grey ">
                <div class="container">
                    <div class="text-left text-slogan">
                        <h3 class="ui-title title-decore">Paket Wisata 1 Hari</h3>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('media/image/bromo.webp') }}" class="img imgdiv">
                            <div class="centered box2">Bromo Midnight </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Bromo Midnight 1 Day Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('media/image/kawah-ijen.webp') }}" class="img imgdiv">
                            <div class="centered box2 text-center">Kawah Ijen </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Kawah Ijen 1 Day Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-featured section-default bg-grey ">
                <div class="container">
                    <div class="text-left text-slogan">
                        <h3 class="ui-title title-decore">Paket Wisata 2 Hari 1 Malam</h3>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('media/image/paralayang.webp') }}" class="img imgdiv3">
                            <div class="centered box2">Batu + Bromo </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Batu + Bromo 2 hari 1 malam Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('media/image/madakaripura.webp') }}" class="img imgdiv3">
                            <div class="centered box2 text-center">Bromo + Madakaripura </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Bromo + Madakaripura 2 hari 1 malam Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('media/image/baluran2.webp') }}" class="img imgdiv3">
                            <div class="centered box2 text-center">Kawah Ijen + Baluran </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Kawah Ijen + Baluran 2 hari 1 malam Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-featured section-default bg-grey ">
                <div class="container">
                    <div class="text-left text-slogan">
                        <h3 class="ui-title title-decore">Paket Wisata 3 Hari 2 Malam</h3>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                        <div class="h10"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('media/image/jodipan.jpg') }}" class="img myimage imgdiv"
                                style="max-width: 500px; min-width: 500px;">
                            <div class="centered box2">Malang + Batu + Bromo </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4 text-center"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Malang + Batu + Bromo 3 hari 2 malam Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('media/image/baluran.jpg') }}" class="img myimage imgdiv"
                                style="max-width: 500px; min-width: 500px;">
                            <div class="centered box2 text-center">Bromo + Kawah Ijen + Baluran </div>
                            <div class="text-center mb-4">
                                <a class="btn btn-primary mt-4"
                                    href="https://api.whatsapp.com/send?phone=6281332033337&text=Saya berminat dengan paket wisata Bromo + Kawah Ijen + Baluran 3 hari 2 malam Atas nama: Tanggal berangkat: Bulan:">
                                    <i class="fa-brands fa-whatsapp mr-2"></i>Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('depan/template/footer')
        </div>
    </div>
    <div id="example"></div>
</body>
<script type="text/javascript">
    whatsappchat.multipleUser({
        selector: "#example",
        users: [{
                name: "CS Diah Sukma",
                phone: "6281332033337",
                designation: "Konsultasi dan Pemesanan",
                image: "media/floating-wa/icons8-whatsapp-64.svg",
            },
            {
                name: "CS Henry",
                phone: "6282139077771",
                designation: "Konsultasi dan Pemesanan",
                image: "media/floating-wa/icons8-whatsapp-64.svg",
            },
        ],
        headerMessage: "Hi! Click one of our member below to chat on <strong>Whatsapp</strong> <br> ",
        chatBoxMessage: "Admin kami akan membalas dalam beberapa saat",
        color: "#25D366",
    });
</script>
