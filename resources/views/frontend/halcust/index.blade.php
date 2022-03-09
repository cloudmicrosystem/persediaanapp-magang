<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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
                <div class="item-slick1 item1-slick1" style="background-image: url(images/slide-1.jpeg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="fadeInDown">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            MORFEEN THIRTEEN
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(images/welcome2.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="lightSpeedIn">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(images/welcome4.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="rotateInDownLeft">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="rotateInUpRight">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
                        <span class="tit2 t-center">
                            DISTRO
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            MORFEEN THIRTEEN
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Morfeen adalah sebuah brand yang dibentuk dan di dirikan oleh Fandi Akhmad ketika dia masih bersekolah di bangku SMK, tepat nya pada tahun 2013
                            bergerak di bidang fashion style & clothing line. Hingga saat ini Morfeen sudah memilik 2 toko offline di Sukun, Kota Malang & Slorok, Kab. Malang.

                        </p>

                        <a href="halabout" class="txt4">
                            Our Story
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="images/halcus.jpg" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="section-intro">
        <div class="header-intro parallax100 t-center p-t-135 p-b-158"
            style="background-image: url(images/halcus1.jpg);">
            <span class="tit2 p-l-15 p-r-15">
                MORFEEN
            </span>

            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                THERTEEN
            </h3>
        </div>

    </section>
    <br>
    <br>

    <!-- Event -->
    <section class="section-event">
        <div class="wrap-slick2">
            <div class="slick2">
                <div class="item-slick2 item1-slick2" style="background-image: url(images/slide-1.jpeg);">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
                                <span class="tit2 p-l-15 p-r-15">
                                    Upcomming
                                </span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                data-appear="zoomIn">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg1-blo2"
                                    style="background-image: url(images/event-1.jpg);">
                                    <div class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m t-center">
                                            08:00 PM Tuesday - 21 November 2018
                                        </span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Wines during specific nights
                                    </h4>

                                    <p class="t-center">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla,
                                        nunc sed imperdiet lacinia
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 days">
                                                25
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Days
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 hours">
                                                12
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Hours
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 minutes">
                                                59
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Minutes
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 seconds">
                                                56
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Seconds
                                            </span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 item2-slick2" style="background-image: url(images/bg-event-02.jpg);">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
                                <span class="tit2 p-l-15 p-r-15">
                                    Upcomming
                                </span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                data-appear="fadeInDown">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg2-blo2"
                                    style="background-image: url(images/event-06.jpg);">
                                    <div class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m">
                                            08:00 PM Tuesday - 21 November 2018
                                        </span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Wines during specific nights
                                    </h4>

                                    <p class="t-center">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla,
                                        nunc sed imperdiet lacinia
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 days">
                                                25
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Days
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 hours">
                                                12
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Hours
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 minutes">
                                                59
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Minutes
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 seconds">
                                                56
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Seconds
                                            </span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 item3-slick2" style="background-image: url(images/bg-event-04.jpg);">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
                                <span class="tit2 p-l-15 p-r-15">
                                    Upcomming
                                </span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                data-appear="rotateInUpLeft">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg3-blo2"
                                    style="background-image: url(images/event-01.jpg);">
                                    <div class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m">
                                            08:00 PM Tuesday - 21 November 2018
                                        </span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Wines during specific nights
                                    </h4>

                                    <p class="t-center">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla,
                                        nunc sed imperdiet lacinia
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 days">
                                                25
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Days
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 hours">
                                                12
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Hours
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 minutes">
                                                59
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Minutes
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 seconds">
                                                56
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Seconds
                                            </span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick2-dots"></div>
        </div>
    </section>
    <br>

    <!-- Video -->
    <section class="section-video parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>

    <!-- Blog -->
    <section class="section-blog bg-white p-t-115 p-b-123">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Latest News
                </span>

                <h3 class="tit5 t-center m-t-2">
                    The Blog
                </h3>
            </div>

            <div class="row">
                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                21 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Best Places for Wine
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
                            </p>

                            <a href="artikel" class="txt4">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/blog-02.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                15 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Eggs and Cheese
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Duis elementum, risus sit amet lobortis nunc justo condimentum ligula, vitae feugiat
                            </p>

                            <a href="artikel" class="txt4">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/blog-03.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Style the Wedding Party
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                            </p>

                            <a href="artikel" class="txt4">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
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
                    <iframe src="https://www.youtube.com/embed/suxwY9BhxaA?start=1" title="YouTube video player" allowfullscreen></iframe>
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

</body>

</html>
