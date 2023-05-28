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
                                <h1 class="page-title">Menu Artikel</h1>
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
                                                        <th class="wd-10p border-bottom-0">No</th>
                                                        <th class="wd-20p border-bottom-0">Judul Artikel</th>
                                                        <th class="wd-20p border-bottom-0">Isi Artikel</th>
                                                        <th class="wd-20p border-bottom-0">Tags</th>
                                                        <th class="wd-20p border-bottom-0">Status</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sewa Mobil Dinas Terpercaya</td>
                                                        <td>Keberadaan mobil dinas bisa dikatakan sangat penting....
                                                        </td>
                                                        <td><span class="badge bg-primary">Diunggah</span></td>
                                                        {{-- <td><span class="badge bg-danger">Diarsipkan</span></td> --}}
                                                        <td>
                                                            <span class="tag tag-primary my-2">Sewa Mobil</span>
                                                            <span class="tag tag-primary">Malang</span>
                                                        </td>
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
                                                            <a href="#" class="btn btn-icon btn-danger me-2 my-2"
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
                        <h5 class="modal-title" id="mdl_label">Tambah Artikel </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="judul">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul"
                                    placeholder="Masukan Judul Artikel !">
                            </div>
                            <div class="form-group">
                                <label for="artikel">Isi Artikel</label>
                                <textarea class="form-control mb-4 tinyMce" id="artikel" rows="4" placeholder="Masukan Isi Artikel !"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga_mobil">Tags</label>
                                <p class="text-danger" style="font-size: 10px">Tekan Enter untuk membuat Tags !</p>
                                <div class="text-wrap">
                                    <div class="example">
                                        <div class="form-group">
                                            <input type="text" data-role="tagsinput"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status Artikel</label>
                                <select class="form-control select2 form-select" >
                                    <option value="1">Diunggah</option>
                                    <option value="2">Diarsipkan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Artikel </label>
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
                                <label for="judul">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul">
                            </div>
                            <div class="form-group">
                                <label for="artikel">Isi Artikel</label>
                                <textarea class="form-control mb-4 tinyMce" id="artikel" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga_mobil">Tags</label>
                                <p class="text-danger" style="font-size: 10px">Tekan Enter untuk membuat Tags !</p>
                                <div class="text-wrap">
                                    <div class="example">
                                        <div class="form-group">
                                            <input type="text" data-role="tagsinput"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status Artikel</label>
                                <select class="form-control select2 form-select" >
                                    <option value="1">Diunggah</option>
                                    <option value="2">Diarsipkan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Artikel </label>
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
                        <h5 class="modal-title" id="mdl_label">Hapus Data Harga Sewa Mobil </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus artikel tersebut ?</p>
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
                        <h5 class="modal-title" id="mdl_label">Detail Artikel </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="fw-bold">Judul Artikel</h6>
                            <p id="">Judul Artikelnya nih</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Isi Artikel</h6>
                            <p id="">Isi Artikelnya nih</p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Tags</h6>
                            <span class="tag tag-primary">Malang</span>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Status</h6>
                            <span class="badge bg-primary">Diunggah</span>
                            {{-- <span class="badge bg-danger">Diarsipkan</span> --}}
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Gambar</h6>
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
<script src="{{ asset('admin/plugins/inputtags/inputtags.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.2/tinymce.min.js"></script>
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