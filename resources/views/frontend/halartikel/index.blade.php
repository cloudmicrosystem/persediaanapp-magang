<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artikel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/logoa.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/lightbox2/css/lightbox.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/main.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free/css/all.min.css') }}">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    @include('frontend.halcust.header')

    <!-- Sidebar -->
    @include('frontend.halcust.sidebar')

    <!-- Slide1 -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/halproduct.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="fadeInDown">
                            ARTIKEL
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Morfeen Thirteen
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

     <!-- ARTIKEL -->
     <section class="section-blog bg-white p-t-115 p-b-123">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/welcome1.jpeg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                21 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Best Places for Wine
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/d2.jpeg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                15 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Eggs and Cheese
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Duis elementum, risus sit amet lobortis nunc justo condimentum ligula, vitae feugiat
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/d3.jpeg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Style the Wedding Party
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/d1.jpeg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Style the Wedding Party
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/About.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Style the Wedding Party
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="blog-detail.html"><img src="images/detail.jpeg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="blog-detail.html">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Style the Wedding Party
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('frontend.halcust.footer')


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetcus/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetcus/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetcus/js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/parallax100/parallax100.js') }}"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assetcus/vendors/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/main.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>
    @stack('custom-js')
    <!-- AdminLTE App -->
    <script src="{{ asset('') }}assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('') }}assets/dist/js/demo.js"></script>

</body>

</html>
