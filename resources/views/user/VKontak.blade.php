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
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-4 text-center">
                            <div class="about-banner-text" data-aos="fade-up">
                                <h1 class="text-white about-h1" data-aos="zoom-out-left">Kontak Kami</h1>
                                <div class="row justify-content-center text-white">
                                    <div class="col-auto">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img
                                                    src="{{ asset('user/images/contact-icon1.png') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="contact-title">Alamat:</span>
                                        <span class="contact-parah">Perumahan
                                            panorama garden blok S-45, Kec. Wagir, Kabupaten Malang, Jawa
                                            Timur 65158</span>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-white">
                                    <div class="col-auto">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img
                                                    src="{{ asset('user/images/contact-icon2.png') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="contact-title">Nomor Whatsapp:</span>
                                        <span class="contact-parah">+62 821 3907 7771<span class="pr-2 pl-2">I
                                            </span>Setiap Hari, jam 07.00 s/d
                                            23.00</span>
                                    </div>
                                </div>
                                {{-- <li class="contact-li">
                                        <div class="icons-rounded-box-contact">
                                            <figure class="mb-0"><img src="{{ asset('user/images/contact-icon3.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="contact-content">
                                            <span class="contact-title">Email:</span>
                                            <span class="contact-parah">support@redlight.com</span>
                                        </div>
                                    </li> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Accordian-Section -->
    <div class="map-section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15803.792572470484!2d112.5811679!3d-8.0042851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788387be21a1a3%3A0x90d8a16ea5fb2b2b!2sKenz%20Tranz!5e0!3m2!1sid!2sid!4v1681232527123!5m2!1sid!2sid"
                        width="1114" height="366" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('user.template.footer')
</body>

</html>
