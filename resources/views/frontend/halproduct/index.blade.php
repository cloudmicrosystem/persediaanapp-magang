<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
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
    @include('halcust.header')

    <!-- Sidebar -->
    @include('halcust.sidebar')

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

    <!-- Sidebar kategori -->
    <section class="slider-section pt-4 pb-4">
        <div class="container">
            <div class="slider-inner">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav-category" style="border-right: 1px solid #bbb; height: 100%">
                            <h3><b><i>Kategori Product</i></b></h3>
                            <ul class="menu-category mt-3">
                                <li><a href="#">Hoodie</a></li>
                                <li><a href="#">Kaos</a></li>
                                <li><a href="#">Polo</a></li>
                                <li><a href="#">Tas</a></li>
                                <li><a href="#">Sepatu</a></li>
                                <li><a href="#">Jacket</a></li>
                            </ul>
                        </nav>
                    </div>

                    {{-- Product Card --}}
                    <div class="col-md-8 m-auto w-100">
                        <div class="row">

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images/welcome1.jpeg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Tas
                                            </h2>
                                        </a>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p class="my-2">Rp. 100.000,00</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success">Beli</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images\d2.jpeg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Kaos
                                            </h2>
                                        </a>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p class="my-2">Rp. 150.000,00</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success">Beli</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images/d3.jpeg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Kaos
                                            </h2>
                                        </a>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p class="my-2">Rp. 120.000,00</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success">Beli</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images/welcome2.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Tas
                                            </h2>
                                        </a>
                                        <p class="my-2">Rp. 130.000,00</p>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success bi bi-cart4">Beli</a>
                                    </div>


                                </div>



                            </div>

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images/halcus.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Tas
                                            </h2>
                                        </a>
                                        <p class="my-2">Rp. 130.000,00</p>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success bi bi-cart4">Beli</a>
                                    </div>


                                </div>



                            </div>

                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <a href="haldetailproduct">
                                        <img src="images/welcome4.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="haldetailproduct">
                                            <h2 class="card-title" style="font-size: 20px; font-weight:bold">Tas
                                            </h2>
                                        </a>
                                        <p class="my-2">Rp. 130.000,00</p>
                                        <p class="card-text">Dengan bahan yang bagus di desain dengan rapi</p>
                                        <p style="color: orange" class="m-1">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="btn btn-success bi bi-cart4">Beli</a>
                                    </div>


                                </div>



                            </div>

                            {{-- Pagenation --}}

                            <div class=" pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
                                <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                                <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                                <a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
                            </div>
                        </div>
                    </div>



                    {{-- <div class="col-md-9">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner shadow-sm rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./assets/img/slides/slide1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Mountains, Nature Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/img/slides/slide2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Freedom, Sea Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/img/slides/slide3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Living the Dream, Lost Island</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    @include('halcust.footer')


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
