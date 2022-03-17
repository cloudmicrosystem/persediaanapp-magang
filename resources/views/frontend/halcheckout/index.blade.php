<!doctype html>
<html class="no-js" lang="en">

<head>
    {{-- CSS Class Content --}}
    @stack('custom-css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/demo.css') }}" />
    <script src="{{ asset('assetcus/js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('assetcus/js/vendor/jquery.js') }}"></script>
    <title>Detail | Morfeen </title>
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
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assetcus/vendors/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/slick/slick.css') }}"> --}}
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

<body class="animation " style="background: black">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header ">
            <div class="container h-full">
                <div class="wrap_header trans-10 ">
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
                                    <a href="/home">Home</a>
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

                                <li>
                                    <a href="/contact.html">|</a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">

                        <a href="#"><i class="fa fa-user m-l-21" aria-hidden="true"></i></a>

                        {{-- KERANJANG --}}
                        {{-- <div class="span6">
                            <div class="product-Info">
                                <span class="keranjang_quantity"></span>
                                <a href="#myModal" role="button" class="product-view" data-toggle="modal"><i
                                        class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i></a>
                            </div>

                            <div id="myModal" class="modal hide fade">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h3><span class="keranjang_quantity"></span> items</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="keranjang_items"></div>
                                    <!-- Yep it's that simple -->
                                    <hr>
                                    <div class="left"><strong>Items: </strong><span
                                            class="keranjang_quantity"></span></div>
                                    <div class="right"><strong>Total: </strong><span
                                            class="keranjang_total"></span></div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="keranjang_empty">Empty</a>
                                    <a href="javascript:;" class="keranjang_checkout">Checkout</a>
                                </div>
                            </div>

                            <div class="product-total">

                                <p><b>Items:</b> <span class="keranjang_quantity"></span></p>
                                <!--number of items in the cart-->

                                <p><b>Total:</b> <span class="keranjang_total"></span></p>
                                <!-- total cost of cart before tax & shipping-->

                                <p><b>Tax rate:</b> <span class="keranjang_taxRate"></span></p>
                                <!--will be display as a percentage ( ie 7% )-->

                                <p><b>Tax:</b> <span class="keranjang_tax"></span></p>
                                <!--taxRate X total displayed as currency-->

                                <p><b>Final price:</b> <span class="keranjang_grandTotal"></span> </p>
                                <!--total of the cart after tax & shipping -->

                            </div>

                        </div><!-- /span6 --> --}}

                        <a href="#"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i></a>

                        {{-- <button class="btn-show-sidebar m-l-33 trans-0-4"></button> --}}
                    </div>

                </div>
            </div>
        </div>
    </header>

    <br><br>

    <br><br>

    <br><br>

    <section class="content m-10">
        <div class="d-flex justify-content-center">
           <p class="text-uppercase" style="font-size: 20px"> Checkout </p>
            <div class="row">

                <div class="col-6 m-4">
                    <form>
                        <div class="card-body">
                            <div class="form-group " >
                                <label style="color: white" for="exampleInputName">Nama :</label>
                                <input style="background-color: black" type="text" class="form-control" id="exampleInputName" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">No Hp :</label>
                                <input style="background-color: black" type="text" class="form-control " id="exampleInputPassword1"
                                    placeholder="No Hp">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Negara :</label>
                                <input style="background-color: black" type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Negara">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputEmail1">Kota :</label>
                                <input style="background-color: black" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kota">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Alamat :</label>
                                <input style="background-color: black" type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Kodepos :</label>
                                <input style="background-color: black" type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Kodepos">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="inputMessage">Keterangan </label>
                                <textarea style="background-color: black" id="inputMessage" class="form-control" rows="4" placeholder="Keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark" value="Send message">
                            </div>

                        </div>
                    </form>
                </div>

                {{-- <div class="col-6">
                    <form>
                        <div class="card-body">

                        </div>
                    </form>
                </div> --}}


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
    <script src="{{ asset('assetcus/js/foundation.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/setup.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    @stack('custom-js')
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
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

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    @stack('custom-js')
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>

    <script src="{{ asset('assetcus/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/jquery-3.6.0.min.js') }}"></script>
</body>

</html>
