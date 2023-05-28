@include('depan.template.header')

<body>
    <div class="form-page">
        <div class="form-logo">
            <a class="navbar-brand scroll" href="home.html"><img class="normal-logo" src="{{ asset('media/logo.png') }}" alt="logo"></a>
        </div>
        <!-- Loader-->
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
        <!-- Loader end-->
        <div class="form-content">
            <form class="ui-form" action="#" method="">
                <div class="legend">Log In:</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" type="Username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="Password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">LOG IN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-bg form-bg01">
        </div>
    </div>
    <script src="{{ asset('plugins/jquery.js') }}"></script>
    <script src="{{ asset('plugins/jquery-migrate.js') }}"></script>
    <script src="{{ asset('plugins/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap-select.min.js') }}"></script>
    <!-- Animations-->
    <script src="{{ asset('plugins/scrollreveal/scrollreveal.min.js') }}"></script>
    <!-- Scale images-->
    <script src="{{ asset('plugins/ofi.min.js') }}"></script>
    <!-- User customization-->
    <script src="{{ asset('js/custom.js') }}"></script>