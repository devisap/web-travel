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
                                <h1 class="page-title">Menu Home / Landing Page</h1>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3 class="card-title">Landing Page Kenz Tranz</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basic-datatable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th class="wd-15p border-bottom-0">Judul</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sewa Mobil Malang</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning me-2 my-2"
                                                                data-bs-target="#mdl_judul" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Judul Landing Page"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi.</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning me-2 my-2"
                                                                data-bs-target="#mdl_link" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Isi Pesan"
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

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3 class="card-title">Kenapa Memilih Kami !</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basic-datatable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th class="wd-15p border-bottom-0">No</th>
                                                        <th class="wd-15p border-bottom-0">Judul</th>
                                                        <th class="wd-20p border-bottom-0">Keterangan</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mobil Terawat</td>
                                                        <td>Kami selalu menjaga performa serta kebersihan...</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-primary me-2 my-2"
                                                                data-bs-target="#mdl_detailChoose" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Detail Harga Sewa Mobil !"
                                                                data-bs-original-title="Detail">
                                                                <i class="fe fe-info"></i></a>
                                                            <a href="#" class="btn btn-icon btn-warning me-2 my-2"
                                                                data-bs-target="#mdl_editChoose" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Harga Sewa Mobil"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger me-2 my-2"
                                                                data-bs-target="#mdl_deleteChoose" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Hapus Harga Sewa Mobil"
                                                                data-bs-original-title="Hapus">
                                                                <i class="fe fe-trash"></i></a>
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
        <div class="modal fade" id="mdl_judul" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Ubah Judul Pada Landing Page</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="deskripsi">Judul</label>
                                <textarea class="form-control mb-4" id="deskripsi" rows="3">Sewa Mobil Malang</textarea>
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
        <div class="modal fade" id="mdl_link" tabindex="-1" role="dialog" aria-labelledby="mdl_linklabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_linklabel">Ubah Judul Link Hubungi Kami</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="deskripsi">Link</label>
                                <textarea class="form-control mb-4" id="deskripsi" rows="3">Selamat Datang di *Ken'z Tranz* Admin kami akan membalas pesan Anda secepat mungkin. Anda bisa memilih beberapa layanan kami diantaranya :1. Sewa Mobil 2. Transportasi VIP 3. Perjalanan Dinas 4. Acara Keluarga 5. Pelayanan Tour Wisata 6. Pernikahan 7. Dan lain sebagainya Kami menyediakan armada terbaru yang bersih dan wangi.</textarea>
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
        
        {{-- Why Choose Us  --}}
        <div class="modal fade" id="mdl_editChoose" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Edit Data Kenapa Memilih Kami !  </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control mb-4" id="deskripsi" rows="3"></textarea>
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

        <div class="modal fade" id="mdl_deleteChoose" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Hapus Data Kenapa Memilih Kami</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data Kenapa Memilih Kami tersebut ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="mdl_detailChoose" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Detail Data Harga Sewa Mobil </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="fw-bold">Judul</h6>
                            <p id="">Mobil terawat</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Keterangan</h6>
                            <p id="">Keterangan</p>
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
<script>
    function previewAddImgCarousel() {
        document.getElementById("prevAddCarousel").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgCarousel").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddCarousel").src = oFREvent.target.result;
        };
    };

    function previewEditImgCarousel() {
        document.getElementById("prevEditCarousel").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgCarousel").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditCarousel").src = oFREvent.target.result;
        };
    };
</script>
