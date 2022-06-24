<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artikel | Morfeen</title>
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
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header background bgblack">
            <div class="container h-full">
                <div class="wrap_header trans-0-4">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="home">
                            <img src="images/icons/logo2.png" alt="IMG-LOGO" data-logofixed="images/icons/logoa.png">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>

                                <li>
                                    <a href="/product">Product</a>
                                </li>

                                <li>
                                    <a href="/store">Store</a>
                                </li>

                                <li>
                                    <a href="/artikel">Artikel</a>
                                </li>

                                <li>
                                    <a href="/about">About</a>
                                </li>

                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">

                        <a href="/home"><i class="fa fa-user m-l-21" aria-hidden="true"></i></a>

                        <a href="/keranjang"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i></a>

                        <a href="/whislist"><i class="fa fa-heart  m-l-21" aria-hidden="true"></i></a>

                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    @include('frontend.halcust.sidebar')



    <!-- ARTIKEL -->
    <section>
        <h1 class="text-bold text-uppercase text-center  p-t-150 " style="font-size: 20px ; font-family: 'Trebuchet MS'">ARTIKEL</h1>
        <div class="bread-crumb bo5-b p-t-50 p-b-17">
            <div class="container">
                <a href="/" class="txt27">
                    Home
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <span class="txt29">
                    Artikel
                </span>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-20 pb-5 bo5-r h-full p-r-50 p-r-0-md bo-none-md">

                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="detailartikel">
                                    <img src="images/artikel/jenis kain.jpg" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href="detailartikel" class="tit9">Combed</a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
                                    <span>
                                        by Admin
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        2 Juni, 2022
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        Combed
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>


                                </div>

                                <p>
                                    Kain cotton combed memang populer digunakan untuk bahan kaus oleh distro.
                                </p>

                                <a href="detailartikel" class="dis-block txt4 m-t-30">
                                    Continue Reading
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="detailartikel">
                                    <img src="images/artikel/jenis kain.jpg" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href="detailartikel" class="tit9">combed 30s</a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
                                    <span>
                                        by Admin
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        2 Juni, 2022
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        combed 30s
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>


                                </div>

                                <p>
                                    Semakin tinggi angkanya, semakin tipis dan lemas kain yang dihasilkan ,sementara 30s
                                    paling tipis dan lunak.
                                </p>

                                <a href="detailartikel" class="dis-block txt4 m-t-30">
                                    Continue Reading
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="detailartikel">
                                    <img src="images/artikel/Cotton.jpg" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href="detailartikel" class="tit9">Katun</a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
                                    <span>
                                        by Admin
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        2 Juni, 2022
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        Katun
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                </div>

                                <p>
                                    Katun merupakan salah satu bagian dari jenis kain yang berasal dari bahan-bahan
                                    serat alami tumbuhan kapas atau yang nama latin yaitu “gossypium.”
                                </p>

                                <a href="detailartikel" class="dis-block txt4 m-t-30">
                                    Continue Reading
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>



                        <!-- Pagination -->
                        <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
                            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-20 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search"
                                placeholder="Search">
                            <button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <h4 class="txt33 bo5-b p-b-35 p-t-30">
                                Categori
                            </h4>

                            <ul>
                                <li class="bo5-b p-t-4 p-b-4">
                                    <a href="#" class="txt27">
                                        Katun
                                    </a>
                                </li>

                                <li class="bo5-b p-t-4 p-b-4">
                                    <a href="#" class="txt27">
                                        Combed
                                    </a>
                                </li>

                                <li class="bo5-b p-t-4 p-b-4">
                                    <a href="#" class="txt27">
                                        combed 30s
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="section-blog bg-white p-20 p-b-50">
        <div class="container">
            <div class="row">
                @foreach ($article as $items)
                <div class="col-md-4 p-t-30">
                    <div class="blo1" style="border-bottom: 2px solid black">
                        <ul>
                            <li>
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                    <a href="detailartikel">
                                        <img src="{{ asset('images/artikel/' . $items->gambar_article) }}"
                                        class="img-fluid"
                                        alt="{{ $items->judul }}"/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="wrap-text-blo1 p-t-35">
                            <a href="detailartikel">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    {{ $items->judul }}
                                </h4>
                            </a>
                            <p class="m-b-20">
                                {{ Str::limit($items->deskripsi, '80', ' . . . . . . . ') }}
                            </p>
                            <a href="detailartikel" class="txt4" >
                                View more
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}


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
