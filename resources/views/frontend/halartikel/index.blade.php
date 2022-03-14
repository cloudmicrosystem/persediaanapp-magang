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
                <div class="item-slick1 item1-slick1" style="background-image: url(images/banner/bgartikel.jpg);">
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- ARTIKEL -->
    <section class="section-blog bg-white p-20 p-b-50">
        <div class="container">
            <div class="row">
                <!-- ARTIKEL 1 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                21 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    Daddyteddy Band Pop Punk Asal Malang Awali 2021 dengan Luncurkan Video Clip Sirna
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Band Pop Punk yang terbentuk pada tahun 2012 ini beranggotakan Ivan sebagai vokalis, Rangga dan Ryan sebagai gitaris, Dwiki sebagai bassist dan Taufan sebagai drummer.
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL 2 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                22 Dec 2019
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    "SELF REMINDER", SEBUAH RENUNGAN HIDUP HARI INI
                                </h4>
                            </a>
                            <p class="m-b-20">
                                Fandi Akhmad (vocal), Romy Fatchurrozi (drum). Rizal Nandha (lead
                                guitar) dan Trinanda/Landang (Rhythm Guitar) adalah TDALV atau Today
                                Alive
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL 3 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    LEPAS MUSIC VIDEO "SOUND OF WEAPON" EXCROWDED BERSIAP UNTUK FULL ALBUM TERBARU
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Excrowded adalah band hardcore sal Malang yang memilik ciri khas
                                gitar yang berat dengan ketukan drum ala Madball Trapped Under Ice,
                                Expire
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL 4 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    UNGKAPKAN BERBAGAI KEGAGALAN
                                    LEWAT SINGLE "UNSEEN"
                                </h4>
                            </a>

                            <p class="m-b-20">
                                Setelah merilis single bertajuk Unseen pada bulan Desember tahun 2018,
                                Oddwain, band Alternative Rock Kepanjen, Malang ini akhirnya mengu-
                                mumkan dirilisnya EP mereka pada tanggal 22 Januari 2019 dengan nama
                                La Cosa Nostra
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL 5 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    MINI ALBUM TERBARU DARI
                                    NOOSE BERJUDUL
                                    "FLAWLESS DARKNESS"
                                </h4>
                            </a>
                            <p class="m-b-20">
                                Noose diinisiasi oleh tiga pemuda tanggung pengibar bendera heavy rock
                                di Kota Malang Mereka adalah Fadly (vocal &gitar), Kevin (bass) dan Dendi
                                (drum) yang mencoba meleburkan musk stoner
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL 6 -->
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="detailartikel"><img src="images/ar1.jpg" alt="IMG-INTRO"></a>

                            <div class="time-blog">
                                12 Dec 2017
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    BARU SAJA MEMPRODUKSI DEBUT ALBUM
                                    BERNAMA "REFERENCES"
                                </h4>
                            </a>

                            <p class="m-b-20">
                                References adalah sebuah fragmen yang mengandung keangkuhan namun
                                juga diksi solid yang berisi tumpukan perasaan kuat dan akan perlahan
                                memba wa kita ke kegelapan pekat.
                            </p>
                            <a href="/detailartikel" class="txt4">
                                View more
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
