<!doctype html>
<html lang="en" dir="ltr">
@include('admin.template.head')

<body class="ltr app sidebar-mini light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('admin.template.header')
            @include('admin.template.sidebar')

            <!--app-content open-->
            <div class="app-content main-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Tentang Kami</h1>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    {{-- <div class="card-header border-bottom">
                                        <h3 class="card-title">Responsive DataTable</h3>
                                    </div> --}}
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basic-datatable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th class="wd-25p border-bottom-0">Tentang Kenz Tranz</th>
                                                        <th class="wd-25p border-bottom-0">Tentang Sewa Mobil</th>
                                                        <th class="wd-25p border-bottom-0">Tentang Paket Wisata</th>
                                                        <th class="wd-25p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ken'z Tranz adalah penyedia layanan sewa mobil (carter mobil
                                                            / rental mobil)....</td>
                                                        <td>Kenz Tranz adalah penyedia layanan sewa mobil (carter mobil
                                                            / rental mobil)....</td>
                                                        <td>Ingin pergi berwisata ke gunung bromo sendirian? atau
                                                            rame-rame dengan teman?...</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-primary me-2 my-2"
                                                                data-bs-target="#mdl_detail" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Detail Harga Sewa Mobil !"
                                                                data-bs-original-title="Detail">
                                                                <i class="fe fe-info"></i></a>
                                                            <a href="#" class="btn btn-icon btn-warning me-2 my-2"
                                                                data-bs-target="#mdl_edit" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Harga Sewa Mobil"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mdl_edit" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Edit Data Harga Sewa Mobil </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="tentang_kenz">Tentang Kenz Tranz</label>
                                <textarea class="form-control mb-4 tinyMce" id="tentang_kenz" rows="4">Ken'z Tranz adalah penyedia layanan sewa mobil (carter mobil / rental mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift dan Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan anda. Malang Army Trans memberikan anda kemudahan dalam melakukan pemesanan kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang direncanakan.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tentang_mobil">Tentang Sewa Mobil</label>
                                <textarea class="form-control mb-4 tinyMce" id="tentang_mobil" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Mobil </label>
                                <img class="m-3 mx-auto" id="prevAddMobil" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input"
                                    id="addImgMobil" onchange="previewAddImgMobil();" required />
                                {{-- <input class="form-control file-input" type="file" id="formFile"> --}}
                            </div>
                            <div class="form-group">
                                <label for="tentang_paket">Tentang Paket Wisata</label>
                                <textarea class="form-control mb-4 tox-target tinyMce" id="tentang_paket" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Paket Wisata</label>
                                <img class="m-3 mx-auto" id="prevAddPaket" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input"
                                    id="addImgPaket" onchange="previewAddImgPaket();" required />
                                {{-- <input class="form-control file-input" type="file" id="formFile"> --}}
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="mdl_detail" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Detail Tentang Kami </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="fw-bold">Tentang Kenz Tranz</h6>
                            <p id="">Ken'z Tranz adalah penyedia layanan sewa mobil (carter mobil / rental mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift dan Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan anda. Malang Army Trans memberikan anda kemudahan dalam melakukan pemesanan kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang direncanakan.</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Tentang Sewa Mobil</h6>
                            <p id="">Ken'z Tranz adalah penyedia layanan sewa mobil (carter mobil / rental mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift dan Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan anda. Malang Army Trans memberikan anda kemudahan dalam melakukan pemesanan kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang direncanakan.</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Gambar</h6>
                            <div class="me-7 mb-4 text-center">
                                <div class="">
                                    <img alt="image" id="" src="{{ asset('user/images/icon.png') }}" style="max-width: 430px; min-width:300px;" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Tentang Paket Wisata</h6>
                            <p id="">Ken'z Tranz adalah penyedia layanan sewa mobil (carter mobil / rental mobil) LUXURY DAN PREMIUM CAR yang terletak di Malang, Jawa Timur. Beragam jenis mobil yang di sewakan dari mobil dengan kapasitas penumpang sedikit hingga mobil yang dapat menampung banyak penumpang seperti sewa mobil Toyota HiAce Premio,Inovva reborn facelift dan Toyota Alpahard . Selain itu Malang Army Trans juga menyediakan beragam paket wisata. Paket wisata yang ditawarkan juga tidak kalah beragam, dari paket wisata satu hari, dua hari satu malam, hingga tiga hari dua malam. Selain tujuan wisata yang di rekomendasikan seperti paket wisata Malang / Batu, paket wisata Bromo dan paket wisata Kawah Ijen Banyuwangi, anda juga dapat memilih tujuan wisata sesuai dengan keinginan anda. Malang Army Trans memberikan anda kemudahan dalam melakukan pemesanan kendaraan/paket wisata, sehingga perjalanan yang akan anda tempuh dapat sesuai dengan yang direncanakan.</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Gambar</h6>
                            <div class="me-7 mb-4 text-center">
                                <div class="">
                                    <img alt="image" id="" src="{{ asset('user/images/icon.png') }}" style="max-width: 430px; min-width:300px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.template.footer')
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.2/tinymce.min.js"></script>
<script>
    function previewAddImgKenz() {
        document.getElementById("prevAddKenz").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgKenz").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddKenz").src = oFREvent.target.result;
        };
    };

    function previewAddImgMobil() {
        document.getElementById("prevAddMobil").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgMobil").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddMobil").src = oFREvent.target.result;
        };
    };

    function previewAddImgPaket() {
        document.getElementById("prevAddPaket").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgPaket").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddPaket").src = oFREvent.target.result;
        };
    };

    tinymce.init({
        selector: ".tinyMce",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | preview",
        ],
        plugins: "autoresize advlist autolink link lists charmap preview code"

    });

    // Prevent Bootstrap dialog from blocking focusin
    document.addEventListener('focusin', (e) => {
        if (e.target.closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
            e.stopImmediatePropagation();
        }
    });
</script>
