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
                                                    @foreach ($abouts as $i => $row)
                                                        <tr>
                                                            <td>{{ $row->ab_kenztrans }}</td>
                                                            <td>{{ $row->ab_rentcar }}</td>
                                                            <td>{{ $row->ab_tour }}</td>
                                                            <td>
                                                                <a href="#" class="btn btn-icon btn-primary me-2 my-2 btn-detail"
                                                                    data-kenztrans="{{ $row->ab_kenztrans }}" data-rentcar="{{ $row->ab_rentcar }}" data-rentcarimg="{{ $row->ab_rentcar_img }}" data-tour="{{ $row->ab_tour }}" data-tourimg="{{ $row->ab_tour_img }}"
                                                                    data-bs-target="#mdl_detail" data-bs-toggle="modal"
                                                                    href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                    title="Detail Harga Sewa Mobil !"
                                                                    data-bs-original-title="Detail">
                                                                    <i class="fe fe-info"></i></a>
                                                                <a href="#" class="btn btn-icon btn-warning me-2 my-2 btn-edit"
                                                                    data-id="{{ $row->ab_id }}" data-kenztrans="{{ $row->ab_kenztrans }}" data-rentcar="{{ $row->ab_rentcar }}" data-rentcarimg="{{ $row->ab_rentcar_img }}" data-tour="{{ $row->ab_tour }}" data-tourimg="{{ $row->ab_tour_img }}"
                                                                    data-bs-target="#mdl_edit" data-bs-toggle="modal"
                                                                    href="javascript:void(0)" data-bs-toggle="tooltip"
                                                                    title="Edit Harga Sewa Mobil"
                                                                    data-bs-original-title="Edit">
                                                                    <i class="fe fe-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
                        <form id="form-edit" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tentang_kenz">Tentang Kenz Tranz</label>
                                <textarea class="form-control mb-4 tinyMce" name="ab_kenztrans" id="ekenz" rows="4">{{ $abouts[0]->ab_kenztrans }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tentang_mobil">Tentang Sewa Mobil</label>
                                <textarea class="form-control mb-4 tinyMce" name="ab_rentcar" id="erentcar" rows="3">{{ $abouts[0]->ab_rentcar }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Mobil </label>
                                <div class="text-center">
                                    <img class="m-3 mx-auto" id="erentcarimg" alt=""
                                        style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                </div>
                                <input type="file" name="ab_rentcar_img" class="form-control file-input"
                                    id="addImgMobil" onchange="previewAddImgMobil();" />
                                {{-- <input class="form-control file-input" type="file" id="formFile"> --}}
                            </div>
                            <div class="form-group">
                                <label for="tentang_paket">Tentang Paket Wisata</label>
                                <textarea class="form-control mb-4 tox-target tinyMce" id="etour" name="ab_tour" rows="3">{{ $abouts[0]->ab_tour }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Unggah Foto Paket Wisata</label>
                                <div class="text-center">
                                    <img class="m-3 mx-auto" id="etourimg" alt=""
                                        style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                                </div>
                                <input type="file" name="ab_tour_img" class="form-control file-input"
                                    id="addImgPaket" onchange="previewAddImgPaket();" />
                                {{-- <input class="form-control file-input" type="file" id="formFile"> --}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
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
                            <p id="dkenz"></p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Tentang Sewa Mobil</h6>
                            <p id="drentcar"></p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Gambar</h6>
                            <div class="me-7 mb-4 text-center">
                                <div class="">
                                    <img alt="image" id="drentcarimg" src="" style="max-width: 430px; min-width:300px;" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Tentang Paket Wisata</h6>
                            <p id="dtour"></p>
                        </div>
                        <div class="form-group">
                            <h6 class="fw-bold">Gambar</h6>
                            <div class="me-7 mb-4 text-center">
                                <div class="">
                                    <img alt="image" id="dtourimg" src="" style="max-width: 430px; min-width:300px;" />
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

    $(".btn-detail").on("click", function(){
        let id = $(this).data('id');
        let kenz = $(this).data('kenztrans');
        let rentcar = $(this).data('rentcar');
        let rentcarimg = $(this).data('rentcarimg');
        let tour = $(this).data('tour');
        let tourimg = $(this).data('tourimg');

        $('#dkenz').html(kenz)
        $('#drentcar').html(rentcar)
        $('#drentcarimg').attr('src', '{{ asset("storage") }}/' + rentcarimg);
        $('#dtour').html(tour)
        $('#dtourimg').attr('src', '{{ asset("storage") }}/' + tourimg);
    });

    $(".btn-edit").on("click", function(){
        let id = $(this).data('id');
        let kenz = $(this).data('kenztrans');
        let rentcar = $(this).data('rentcar');
        let rentcarimg = $(this).data('rentcarimg');
        let tour = $(this).data('tour');
        let tourimg = $(this).data('tourimg');

        $('#ekenz').val(kenz)
        $('#erentcar').val(rentcar)
        $('#erentcarimg').attr('src', '{{ asset("storage") }}/' + rentcarimg);
        $('#etour').val(tour)
        $('#etourimg').attr('src', '{{ asset("storage") }}/' + tourimg);
        $('#form-edit').attr('action', '/admin/about/' + id);
    });
</script>
