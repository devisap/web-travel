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
                                <h1 class="page-title">Menu Kontak</h1>
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
                                                    <tr >
                                                        <th class="wd-15p border-bottom-0">Email</th>
                                                        <th class="wd-15p border-bottom-0">Alamat</th>
                                                        <th class="wd-20p border-bottom-0">Nomor Handphone</th>
                                                        <th class="wd-15p border-bottom-0">Waktu Buka</th>
                                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>support@gmail.com</td>
                                                        <td>Perumahan panorama garden blok S-45, Kec. Wagir, Kabupaten Malang, Jawa Timur 65158</td>
                                                        <td>+62 821 3907 7771</td>
                                                        <td>Setiap Hari, jam 07.00 s/d 23.00</td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning me-2" data-bs-target="#mdl_edit" data-bs-toggle="modal" href="javascript:void(0)" data-bs-toggle="tooltip" title="Edit Kontak" data-bs-original-title="Edit">
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
                        <h5 class="modal-title" id="mdl_label">Edit Kontak </h5>
                       <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control mb-4" type="text" name="" id="">
                            </div>
                            <div class="form-group">
                                <label for="jalan">Alamat</label>
                                <textarea class="form-control mb-4" name="" id="jalan" rows="3">Perumahan panorama garden blok S-45, Kec. Wagir, Kabupaten Malang, Jawa Timur 65158</textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_wa">Nomor Handphone</label>
                                <input type="text" class="form-control" name="" id="no_wa" value="+62 821 3907 7771">
                            </div>
                            <div class="form-group">
                                <label for="name_mobil">Waktu Buka</label>
                                <input type="text" class="form-control" name="" id="name_mobil" value="Setiap Hari, jam 07.00 s/d 23.00">
                            </div>
                            <div class="form-group">
                                <label for="pesan_wa">Link Google Maps</label>
                                <textarea class="form-control mb-4" id="pesan_wa" rows="3">https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15803.792572470484!2d112.5811679!3d-8.0042851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788387be21a1a3%3A0x90d8a16ea5fb2b2b!2sKenz%20Tranz!5e0!3m2!1sid!2sid!4v1681232527123!5m2!1sid!2sid</textarea>
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