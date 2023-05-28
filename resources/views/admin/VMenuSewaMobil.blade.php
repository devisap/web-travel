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
                                <h1 class="page-title">Harga Sewa Mobil Premium</h1>
                            </div>
                            <div class="ms-auto pageheader-btn">    
                                <button type="button" class="btn btn-primary" data-bs-target="#mdl_add" data-bs-toggle="modal" href="javascript:void(0)"> <i
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
                                            <table class="table table-bordered text-nowrap border-bottom w-100"
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">No</th>
                                                        <th class="wd-15p border-bottom-0">Nama Mobil</th>
                                                        <th class="wd-20p border-bottom-0">Harga</th>
                                                        <th class="wd-15p border-bottom-0">Deskripsi</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Inova Reborn</td>
                                                        <td>Rp. 600.000</td>
                                                        <td>Include Mobil & Driver</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-primary me-2" data-bs-target="#mdl_detail" data-bs-toggle="modal" href="javascript:void(0)" data-bs-toggle="tooltip" title="Detail Harga Sewa Mobil !" data-bs-original-title="Detail">
                                                            <i class="fe fe-info"></i></a>
                                                            <a href="#" class="btn btn-icon btn-warning me-2" data-bs-target="#mdl_edit" data-bs-toggle="modal" href="javascript:void(0)" data-bs-toggle="tooltip" title="Edit Harga Sewa Mobil" data-bs-original-title="Edit">
                                                            <i class="fe fe-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger me-2" data-bs-target="#mdl_delete" data-bs-toggle="modal" href="javascript:void(0)" data-bs-toggle="tooltip" title="Hapus Harga Sewa Mobil" data-bs-original-title="Hapus">
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
                       <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="name_mobil">Nama Mobil</label>
                                <input type="text" class="form-control" id="name_mobil" placeholder="Masukan Nama Mobil !">
                            </div>
                            <div class="form-group">
                                <label for="harga_mobil">Harga Mobil</label>
                                <input type="text" class="form-control" id="harga_mobil" placeholder="Masukan Harga Mobil !">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control mb-4" id="deskripsi" placeholder="Masukan Deskripsi !" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control mb-4" id="note" placeholder="Masukan Note !" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_wa">Nomor Whatsapp</label>
                                <input type="text" class="form-control" id="no_wa" placeholder="Masukan Nomor Whatsapp CS !">
                            </div>
                            <div class="form-group">
                                <label for="pesan_wa">Teks Pesan Whatsapp</label>
                                <textarea class="form-control mb-4" id="pesan_wa" placeholder="Masukan Teks Pesan Whatsapp !" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Mobil </label>
                                <img class="m-3 mx-auto" id="prevAdd" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input" id="addImg" onchange="previewAddImg();" required />
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
                       <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="name_mobil">Nama Mobil</label>
                                <input type="text" class="form-control" id="name_mobil">
                            </div>
                            <div class="form-group">
                                <label for="harga_mobil">Harga Mobil</label>
                                <input type="text" class="form-control" id="harga_mobil">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control mb-4" id="deskripsi" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control mb-4" id="note" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_wa">Nomor Whatsapp</label>
                                <input type="text" class="form-control" id="no_wa">
                            </div>
                            <div class="form-group">
                                <label for="pesan_wa">Teks Pesan Whatsapp</label>
                                <textarea class="form-control mb-4" id="pesan_wa" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Mobil </label>
                                <img class="m-3 mx-auto" id="prevEdit" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                <input type="file" name="file" class="form-control file-input" id="editImg" onchange="previewEditImg();" required />
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
                        <h5 class="modal-title" id="mdl_label">Hapus Data Harga Sewa Mobil </h5>
                       <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data harga sewa mobil tersebut ?</p>
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
                        <h5 class="modal-title" id="mdl_label">Detail Data Harga Sewa Mobil </h5>
                       <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            
                        </form>
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