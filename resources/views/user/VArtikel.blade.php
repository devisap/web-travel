@include('user.template.head')

<body>
    <!-- HEADER-SECTION -->
    <div class="home-header-section">
        @include('user.template.header')
        <!-- BANNER-SECTION -->

    </div>
    <!--Accordian-Section -->
    <section class="blog-posts padding-top padding-bottom overflow single-post-blog overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div id="blog" class="single-post01 wow slideInLeft" data-aos="fade-up">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('user/images/toyota.png')}}" />
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2 class="mb-0">Judul Artikel</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date color01"> Jan 21, 2023 </span>
                                    </div>
                                    <p>
                                        Curabitur pulvinar euismod ante, ac sagittis ante posuere
                                        ac. Vivamus luctus commodo dolor porta feugiat. Fusce at
                                        velit id ligula pharetra laoreet. Ut nec metus a mi
                                        ullamcorper hendrerit. Nulla facilisi. Pellentesque sed
                                        nibh a quam accumsan dignissim quis quis urna. The most
                                        happiest time of the day!. Praesent id dolor dui, dapibus
                                        gravida elit. Donec consequat laoreet sagittis.
                                        Suspendisse ultricies ultrices viverra. Morbi rhoncus
                                        laoreet tincidunt. Mauris interdum convallis metus.M
                                    </p>
                                    <div class="blockquote">
                                        <p>
                                            The world is a dangerous place to live; not because of
                                            the people who are evil, but because of the people who
                                            don't do anything about it.
                                        </p>
                                        <small>by <cite>Albert Einstein</cite></small>
                                    </div>
                                    <p>
                                        The most happiest time of the day!. Praesent id dolor dui,
                                        dapibus gravida elit. Donec consequat laoreet sagittis.
                                        Suspendisse ultricies ultrices viverra. Morbi rhoncus
                                        laoreet tincidunt. Mauris interdum convallis metus.
                                        Suspendisse vel lacus est, sit amet tincidunt erat. Etiam
                                        purus sem, euismod eu vulputate eget, porta quis sapien.
                                        Donec tellus est, rhoncus vel scelerisque id, iaculis eu
                                        nibh.
                                    </p>
                                    <p>
                                        Donec posuere bibendum metus. Quisque gravida luctus
                                        volutpat. Mauris interdum, lectus in dapibus molestie,
                                        quam felis sollicitudin mauris, sit amet tempus velit
                                        lectus nec lorem. Nullam vel mollis neque. The most
                                        happiest time of the day!. Nullam vel enim dui. Cum sociis
                                        natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Sed tincidunt accumsan massa id
                                        viverra. Sed sagittis, nisl sit amet imperdiet convallis,
                                        nunc tortor consequat tellus, vel molestie neque nulla non
                                        ligula. Proin tincidunt tellus ac porta volutpat. Cras
                                        mattis congue lacus id bibendum. Mauris ut sodales libero.
                                        Maecenas feugiat sit amet enim in accumsan.
                                    </p>
                                    <p>
                                        Duis vestibulum quis quam vel accumsan. Nunc a vulputate
                                        lectus. Vestibulum eleifend nisl sed massa sagittis
                                        vestibulum. Vestibulum pretium blandit tellus, sodales
                                        volutpat sapien varius vel. Phasellus tristique cursus
                                        erat, a placerat tellus laoreet eget. Fusce vitae dui sit
                                        amet lacus rutrum convallis. Vivamus sit amet lectus
                                        venenatis est rhoncus interdum a vitae velit.
                                    </p>
                                </div>
                                <div class="post-tags">
                                    <a href="#">Life</a>
                                    <a href="#">Sport</a>
                                    <a href="#">Tech</a>
                                    <a href="#">Travel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-3 wow slideInRight">
                    <div class="theiaStickySidebar">
                        {{-- <div class="widget widget-newsletter">
                            <form id="widget-search-form-sidebar" class="form-inline">
                                <div class="input-group">
                                    <input type="text" aria-required="true" name="q"
                                        class="form-control widget-search-form" placeholder="Search for pages..." />
                                    <div class="input-group-append">
                                        <span class="input-group-btns">
                                            <button type="submit" id="widget-widget-search-form-button" class="btn">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item p-0">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#recent"
                                            role="tab" aria-controls="recent" aria-selected="true">Recent</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="recent" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <a href="three-colum-sidbar.html"><img alt=""
                                                        src="{{ asset('user/images/toyota.png')}}"
                                                        class="img-fluid" /></a>
                                                <div class="post-thumbnail-content">
                                                    <a href="three-colum-sidbar.html">A true story, that never been
                                                        told!</a>
                                                    <span class="post-date"><span class="far fa-clock"></span> 6m
                                                        ago</span>
                                                    <span class="post-category"><span class="fa fa-tag"></span>
                                                        Technology</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <h4 class="widget-title font_weight_600">Tags</h4>
                            <div class="tags">
                                <a href="#">Life</a>
                                <a href="#">Sport</a>
                                <a href="#">Tech</a>
                                <a href="#">Travel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('user.template.footer')
    <div id="example"></div>
</body>
<script type="text/javascript">
    whatsappchat.multipleUser({
        selector: "#example",
        users: [{
                name: "CS Diah Sukma",
                phone: "6281332033337",
                designation: "Konsultasi Pemesanan",
                image: "user/floating-wa/icons8-whatsapp-64.svg",
            },
            {
                name: "CS Henry",
                phone: "6282139077771",
                designation: "Konsultasi Pemesanan",
                image: "user/floating-wa/icons8-whatsapp-64.svg",
            },
        ],
        headerMessage: "Hi! Click one of our member below to chat on <strong>Whatsapp</strong> <br> ",
        chatBoxMessage: "Admin kami akan membalas dalam beberapa saat",
        color: "#25D366",
    });
</script>
</html>
