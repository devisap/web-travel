<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-section footer-section_info">
                    <div class="footer-logo"><a class="footer-logo__link" href="home.html"><img class="img-responsive"
                                src="{{ asset('media/logo.png') }}" alt="Logo"></a></div>
                    <div class="footer-info">Kenz Tranz - Agen Sewa Mobil di Jawa Timur </div>
                    <ul class="footer-soc list-unstyled">
                        <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i
                                    class="ic fab fa-twitter"></i></a></li>
                        <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i
                                    class="ic fab fa-facebook"></i></a></li>
                        <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i
                                    class="ic fab fa-linkedin"></i></a></li>
                        <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i
                                    class="ic fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4">
                        <section class="footer-section footer-section_link">
                            <h3 class="footer-section__title">Navigasi</h3>
                            <ul class="footer-list list-unstyled">
                                <li><a href="{{ 'sewa-mobil' }}">Sewa Mobil</a></li>
                                <li><a href="{{ 'paket-wisata' }}">Paket Wisata</a></li>
                                <li><a href="{{ 'tentang-kami' }}">Tentang Kami</a></li>
                                <li><a href="{{ 'kontak' }}">Kontak</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-8">
                        <section class="footer-section footer-section_subscribe">
                            <h3 class="footer-section__title">Info</h3>
                            <div class="footer-contacts">
                                <div class="footer-contacts__item"><i
                                        class="fa-solid fa-location-dot mr-2"></i>Perumahan
                                    panorama garden blok S-45, Kec. Wagir, Kabupaten Malang, Jawa
                                    Timur 65158</div>
                                {{-- <div class="footer-contacts__item"><i class="fa-solid fa-envelope mr-2"></i><a
                                        href="mailto:">support@kenz.com</a></div> --}}
                                <div class="footer-contacts__item"><i class="fa-solid fa-phone mr-2"></i>Phone:
                                    <a href="tel:">+62 821 3907 7771</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15803.792572470484!2d112.5811679!3d-8.0042851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788387be21a1a3%3A0x90d8a16ea5fb2b2b!2sKenz%20Tranz!5e0!3m2!1sid!2sid!4v1681188235385!5m2!1sid!2sid"
                    width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-copyright">
                    Copyrights (c) 2023 Ken'z Tranz
                </div>
            </div>
        </div>
    </div>
    <span class="footer__btn-up js-scroll-top"><i class="ic fas fa-angle-up"></i></span>
</footer>

<script src="{{ asset('plugins/jquery.js') }}"></script>
<script src="{{ asset('plugins/jquery-migrate.js') }}"></script>
<script src="{{ asset('plugins/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap-select.min.') }}js"></script>
<!-- Pop-up window-->
<script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Headers scripts-->
<script src="{{ asset('plugins/headers/slidebar.js') }}"></script>
<script src="{{ asset('plugins/headers/header.js') }}"></script>
<!-- Filter and sorting images-->
<script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/imagesLoaded.js') }}"></script>
<!-- Progress numbers-->
<script src="{{ asset('plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('plugins/rendro-easy-pie-chart/jquery.waypoints.min.js') }}"></script>
<!-- Animations-->
<script src="{{ asset('plugins/scrollreveal/scrollreveal.min.js') }}"></script>
<!-- Scale images-->
<script src="{{ asset('plugins/ofi.min.js') }}"></script>
<!-- Main slider-->
<script src="{{ asset('plugins/slider-pro/jquery.sliderPro.min.js') }}"></script>
<!--Sliders-->
<script src="{{ asset('plugins/slick/slick.js') }}"></script>
<!-- User customization-->
<script src="{{ asset('js/custom.js') }}"></script>

<script type="text/javascript">
    whatsappchat.multipleUser({
        selector: "#example",
        users: [
            {
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
        headerMessage:
            "Hi! Click one of our member below to chat on <strong>Whatsapp</strong> <br> ",
        chatBoxMessage: "Admin kami akan membalas dalam beberapa saat",
        color: "#25D366",
    });
</script>