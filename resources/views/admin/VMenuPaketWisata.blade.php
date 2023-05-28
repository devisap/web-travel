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
                                <h1 class="page-title">Paket Wisata</h1>
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
                                                        <th class="wd-15p border-bottom-0">Jenis Paket Wisata</th>
                                                        <th class="wd-20p border-bottom-0">Destinasi Paket Wisata</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Paket Wisata 1 Hari</td>
                                                        <td>Bromo</td>
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
                                                            <a href="#" class="btn btn-icon btn-danger me-2 my-2 my-2"
                                                                data-bs-target="#mdl_delete" data-bs-toggle="modal"
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
        <div class="modal fade" id="mdl_add" tabindex="-1" role="dialog" aria-labelledby="mdl_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mdl_label">Tambah Data Harga Sewa Mobil </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Jenis Paket Wisata</label>
                                <select class="form-control select2 form-select" data-placeholder="Choose one">
                                    {{-- <option label="Pilih Salah 1"></option> --}}
                                    <option value="1">Paket Wisata 1 Hari</option>
                                    <option value="2">Paket Wisata 2 Hari 1 Malam</option>
                                    <option value="3">Paket Wisata 3 Hari 2 Malam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_paket">Destinasi Paket Wisata</label>
                                <input type="text" class="form-control" id="nama_paket"
                                    placeholder="Masukan Destinasi Paket Wisata !">
                            </div>
                            <div class="form-group">
                                <label for="no_wa">Nomor Whatsapp</label>
                                <input type="text" class="form-control" id="no_wa"
                                    placeholder="Masukan Nomor Whatsapp CS !">
                            </div>
                            <div class="form-group">
                                <label for="pesan_wa">Teks Pesan Whatsapp</label>
                                <textarea class="form-control mb-4" id="pesan_wa" placeholder="Masukan Teks Pesan Whatsapp !" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Paket Wisata </label>
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
                        <h5 class="modal-title" id="mdl_label">Edit Data Harga Sewa Mobil </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Jenis Paket Wisata</label>
                                <select class="form-control select2 form-select" data-placeholder="Pilih Salah 1">
                                    {{-- <option label="Pilih Salah 1"></option> --}}
                                    <option value="1">Paket Wisata 1 Hari</option>
                                    <option value="2">Paket Wisata 2 Hari 1 Malam</option>
                                    <option value="3">Paket Wisata 3 Hari 2 Malam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_paket">Destinasi Paket Wisata</label>
                                <input type="text" class="form-control" id="nama_paket">
                            </div>
                            <div class="form-group">
                                <label for="no_wa">Nomor Whatsapp</label>
                                <input type="text" class="form-control" id="no_wa">
                            </div>
                            <div class="form-group">
                                <label for="pesan_wa">Teks Pesan Whatsapp</label>
                                <textarea class="form-control mb-4" id="pesan_wa" placeholder="Masukan Teks Pesan Whatsapp !" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Paket Wisata </label>
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
                        <h5 class="modal-title" id="mdl_label">Hapus Data Paket Wisata </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data paket wisata tersebut ?</p>
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
                        <h5 class="modal-title" id="mdl_label">Detail Data Paket Wisata</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="fw-bold">Jenis Paket Wisata</h6>
                            <p id="">Paket Wisata 1 Hari</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Destinasi Paket Wisata</h6>
                            <p id="">Bromo</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Nomor Whatsapp CS/ Admin</h6>
                            <p id="">628572918901</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Isi Pesan Teks Pesanan</h6>
                            <p id="">Saya berminat dengan paket wisata Bromo Midnight 1 Day Atas nama: Tanggal berangkat: Bulan:</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Foto Paket wisata</h6>
                            <div class="me-7 mb-4 text-center">
                                <div class="">
                                    <img alt="image" id="" src="{{ asset('media/icon.png') }}" style="max-width: 430px; min-width:300px;" />
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
