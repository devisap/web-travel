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
                                <h1 class="page-title">Testimoni</h1>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <button type="button" class="btn btn-primary" data-bs-target="#mdl_add"
                                    data-bs-toggle="modal" href="javascript:void(0)"> <i
                                        class="fe fe-plus me-2"></i>Tambah Data</button>
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
                                                        <th class="wd-15p border-bottom-0">No</th>
                                                        <th class="wd-15p border-bottom-0">Gambar</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img src="{{ asset('user/images/icon.png') }}" alt="..." class="img-thumbnail"></td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-primary me-2 my-2"
                                                                data-bs-target="#mdl_detail" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Detail Harga Sewa Testimoni !"
                                                                data-bs-original-title="Detail">
                                                                <i class="fe fe-info"></i></a>
                                                            <a href="#" class="btn btn-icon btn-warning me-2 my-2"
                                                                data-bs-target="#mdl_edit" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Edit Harga Sewa Testimoni"
                                                                data-bs-original-title="Edit">
                                                                <i class="fe fe-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger me-2 my-2 my-2"
                                                                data-bs-target="#mdl_delete" data-bs-toggle="modal"
                                                                href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                title="Hapus Harga Sewa Testimoni"
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
        <div class="modal fade" id="mdl_add" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Tambah Testimoni </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Testimoni </label>
                                <img class="m-3 mx-auto" id="prevAdd" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input" id="addImg"
                                    onchange="previewAddImg();" required />
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

        <div class="modal fade" id="mdl_edit" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Edit Testimoni </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Edit Foto Testimoni </label>
                                <img class="m-3 mx-auto" id="prevEdit" alt=""
                                    style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input" id="editImg"
                                    onchange="previewEditImg();" required />
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

        <div class="modal fade" id="mdl_delete" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Hapus Testimoni </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data Testimoni tersebut ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="mdl_detail" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Detail Testimoni</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="fw-bold">Foto Testimoni</h6>
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
<script>
    function previewAddImg() {
        document.getElementById("prevAdd").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImg").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAdd").src = oFREvent.target.result;
        };
    };

    function previewEditImg() {
        document.getElementById("prevEdit").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImg").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEdit").src = oFREvent.target.result;
        };
    };
</script>
