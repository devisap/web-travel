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
                                    <div class="main-slider__title">Info Kontak<br></div>
                                    <div class="footer-contacts">
                                        <div class="footer-contacts__item"><i
                                                class="fa-solid fa-location-dot mr-2"></i>Perumahan
                                            panorama garden blok S-45, <br> Kec. Wagir, Kabupaten Malang, Jawa
                                            Timur 65158</div>
                                        {{-- <div class="footer-contacts__item"><i class="fa-solid fa-envelope mr-2"></i><a
                                                href="mailto:">support@kenz.com</a></div> --}}
                                        <div class="footer-contacts__item"><i class="fa-solid fa-phone mr-2"></i>Phone:
                                            <a href="tel:">+62 821 3907 7771</a>
                                        </div>
                                        Setiap Hari, jam 07.00 s/d 23.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="b-featured section-default bg-grey mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15803.792572470484!2d112.5811679!3d-8.0042851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788387be21a1a3%3A0x90d8a16ea5fb2b2b!2sKenz%20Tranz!5e0!3m2!1sid!2sid!4v1681232527123!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </section>
            @include('depan/template/footer')
        </div>
    </div>
</body>
