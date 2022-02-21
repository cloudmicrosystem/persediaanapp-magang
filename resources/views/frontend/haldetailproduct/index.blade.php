<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/demo.css') }}" />
    <script src="assetcus/js/vendor/modernizr.js"></script>
    <script src="assetcus/js/vendor/jquery.js"></script>
    <!-- xzoom plugin here -->
    <script type="text/javascript" src="assetcus/js/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/xzoom.css') }}" media="all" />
    <!-- hammer plugin here -->
    <script type="text/javascript" src="assetcus/hammer.js/1.0.5/jquery.hammer.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link type="text/css" rel="stylesheet" media="all"
        href="{{ asset('assetcus/fancybox/source/jquery.fancybox.css') }}" />
    <link type="text/css" rel="stylesheet" media="all"
        href="{{ asset('assetcus/magnific-popup/css/magnific-popup.css') }}" />
    <script type="text/javascript" src="{{ asset('assetcus/fancybox/source/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetcus/magnific-popup/js/magnific-popup.js') }}"></script>
    <title>Detail</title>
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
    <link href="{{ asset('assetcus/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assetcus/css/owl.carousel.min.css') }}">
</head>

<body class="animation">

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
                            Halaman Product
                        </span>
                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Morfeen Thirteen
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- default start -->
    <section id="default" class="padding-top0">
        <div class="row">
            <div class="large-12 column">
                <h3>Detail Product </h3>
            </div>
            <div class="large-5 column">
                <div class="xzoom-container">
                    <img class="xzoom" id="xzoom-default" src="images/d2.jpeg"
                        xoriginal="images/images/d2.jpeg" />
                    <div class="xzoom-thumbs">
                        <a href="images/d1.jpeg"><img class="xzoom-gallery" width="80" src="images/d1.jpeg"
                                xpreview="images/d1.jpeg" title="The description goes here"></a>
                        <a href="images/d2.jpeg"><img class="xzoom-gallery" width="80" src="images/d2.jpeg"
                                title="The description goes here"></a>
                        <a href="images/d3.jpeg"><img class="xzoom-gallery" width="80" src="images/d3.jpeg"
                                title="The description goes here"></a>
                        <a href="images/d1.jpeg"><img class="xzoom-gallery" width="80" src="images/d1.jpeg"
                                title="The description goes here"></a>
                    </div>
                </div>
            </div>
            <div class="large-7 column"></div>
        </div>
    </section>
    <!-- default end -->

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


    <script src="{{ asset('assetcus/js/foundation.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/setup.js') }}"></script>
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

    <script src="{{ asset('assetcus/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/jquery-3.6.0.min.js') }}"></script>
</body>

</html>
