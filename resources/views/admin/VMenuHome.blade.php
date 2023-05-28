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
                            <div class="ms-auto pageheader-btn">
                                <button type="button" class="btn btn-primary" data-bs-target="#mdl_addCarousel"
                                    data-bs-toggle="modal" href="javascript:void(0)"> <i
                                        class="fe fe-plus me-2"></i>Tambah Foto Carousel</button>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3 class="card-title">Deskripsi Kenz Tranz</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100"
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Deskripsi</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ken'zTranz mempermudah Anda untuk keperluan transportasi...
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning me-2"
                                                                data-bs-target="#mdl_deskripsi" data-bs-toggle="modal"
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

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3 class="card-title">Carousel</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100"
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">No</th>
                                                        <th class="wd-15p border-bottom-0">Thumbnail</th>
                                                        <th class="wd-20p border-bottom-0">Status</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td style="width: 200px; height: 150px"><img
                                                                src="{{ asset('media/image/main-car.png') }}"
                                                                alt="thumb1" class="thumbimg"></td>
                                                        <td class="text-center"><span
                                                                class="badge bg-primary">Diunggah</span></td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning me-2"
                                                                data-bs-target="#mdl_editCarousel"
                                                                data-bs-toggle="modal" href="javascript:void(0)"
                                                                data-bs-toggle="tooltip" title="Edit Harga Sewa Mobil"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger me-2"
                                                                data-bs-target="#mdl_delCarousel" data-bs-toggle="modal"
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

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h3 class="card-title">Kenapa Memilih Kami !</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100"
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
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
                                                            <a href="#" class="btn btn-icon btn-primary me-2"
                                                                data-bs-target="#mdl_detailChoose" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Detail Harga Sewa Mobil !"
                                                                data-bs-original-title="Detail">
                                                                <i class="fe fe-info"></i></a>
                                                            <a href="#" class="btn btn-icon btn-warning me-2"
                                                                data-bs-target="#mdl_editChoose" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Harga Sewa Mobil"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger me-2"
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
        <div class="modal fade" id="mdl_deskripsi" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Ubah Deskripsi Pada Landing Page</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control mb-4" id="deskripsi" rows="3">Ken'zTranz mempermudah Anda untuk keperluan transportasi...</textarea>
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

        {{-- Carousel  --}}
        <div class="modal fade" id="mdl_addCarousel" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Tambah Foto Carousel</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Status Foto</label>
                                <select class="form-control select2 form-select">
                                    <option value="1">Diunggah</option>
                                    <option value="2">Diarsipkan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Carousel </label>
                                <img class="m-3 mx-auto" id="prevAddCarousel" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input"
                                    id="addImgCarousel" onchange="previewAddImgCarousel();" required />
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
        <div class="modal fade" id="mdl_editCarousel" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Edit Foto Carousel</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Status Foto</label>
                                <select class="form-control select2 form-select">
                                    <option value="1">Diunggah</option>
                                    <option value="2">Diarsipkan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Carousel </label>
                                <img class="m-3 mx-auto" id="prevEditCarousel" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input"
                                    id="editImgCarousel" onchange="previewEditImgCarousel();" required />
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
        <div class="modal fade" id="mdl_delCarousel" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Hapus Foto Carousel </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus foto Carousel tersebut ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Hapus</button>
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
