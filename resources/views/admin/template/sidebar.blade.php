<style>
    .mr-2 {
       margin-right: 0.5rem !important;
}
</style>
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{'menu-home'}}">
                <img src="{{ asset('admin/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('admin/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('admin/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('admin/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu"><div class="slide-left disabled" id="slide-left"><i class="fa fa-adjust"></i>
            
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-home'}}">
                        <i class="fa fa-home mr-2"></i>
                        <span class="side-menu__label">Home / Landing Page</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-harga'}}">
                       <i class="fa fa-car mr-2"></i>
                        <span class="side-menu__label">Harga Sewa Mobil</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-paketwisata'}}">
                        <i class="fa fa-map-marker mr-2"></i>
                        <span class="side-menu__label">Paket Wisata</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-artikel'}}">
                        <i class="fa fa-wpforms mr-2"></i>
                        <span class="side-menu__label">Artikel</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-tentangkami'}}">
                        <i class="fa fa-child mr-2"></i>
                        <span class="side-menu__label">Tentang Kami</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-kontak'}}">
                        <i class="fa fa-address-book mr-2"></i>
                        <span class="side-menu__label">Kontak</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{'menu-testimoni'}}">
                        <i class="fa fa-user-plus mr-2"></i>
                        <span class="side-menu__label">Testimoni</span>
                    </a>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
