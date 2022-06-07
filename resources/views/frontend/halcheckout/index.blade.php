<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <link rel="stylesheet" href="{{ asset('assetcus/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/demo.css') }}" />
    <script src="{{ asset('assetcus/js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('assetcus/js/vendor/jquery.js') }}"></script>

    {{-- CSS Class Content --}}
    @stack('custom-css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

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


                        <a href="#"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i></a>

                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <br><br>

    <br><br>

    <br><br>

    <section class="content m-10">
        <div class="d-flex justify-content-center col-12">
            <div class="row">

                <div class="col-6 my-3">
                    <p class="text-bold text-uppercase text-center text-white" style="font-size: 20px ; font-family: 'Trebuchet MS'; "> Checkout </p>
                    <form>
                        <div class="card-body">
                            <div class="form-group ">
                                <label style="color: white" for="exampleInputName">Nama :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white" id="exampleInputName" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">No Hp :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white " id="exampleInputPassword1"
                                    placeholder="No Hp">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Negara :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white" id="exampleInputPassword1"
                                    placeholder="Negara">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputEmail1">Kota :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white" id="exampleInputEmail1" placeholder="Kota">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Alamat :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white" id="exampleInputPassword1"
                                    placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="exampleInputPassword1">Kodepos :</label>
                                <input style="background-color: black" type="text"
                                    class="form-control border border-white" id="exampleInputPassword1"
                                    placeholder="Kodepos">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="inputMessage">Keterangan :</label>
                                <textarea style="background-color: black" id="inputMessage" class="form-control border border-white" rows="4"
                                    placeholder="Keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark" value="Send message">
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-6 my-3 " style="border: black">
                    <p class="text-bold text-uppercase text-center text-white" style="font-size: 20px ; font-family: 'Trebuchet MS'">Your Order</p>
                    <div class="card " style="border: black">
                        <div class="card-body " style="background-color: black ; border: black">
                            <div class="row">
                                <table class="table-bordered table table-responsive ">
                                    <thead class="border-color: black">
                                        <tr class="border-color: black">
                                            <th class="text-white" style="width: 150px; height: auto">Produk</th>
                                            <th class="text-white" style="width: 250px">Nama Produk
                                            </th>
                                            <th class="text-white ">Harga</th>
                                        </tr>
                                    </thead>

                                    <tr>
                                        <td class="text-white text-left" style="width: 100px; height: auto"><img
                                                src="images/katalog/akse1-1.jpg" alt=""></td>
                                        <td class="text-white text-center" style="width: 300px">Sandal <br> 1x2</td>
                                        <td class="text-white ">Rp. 100.000.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-white " style="width: 100px; height: auto"><img
                                                src="images/katalog/akse2-1.jpg" alt=""></td>
                                        <td class="text-white text-center" style="width: 300px">Kacamata <br> 1x2</td>
                                        <td class="text-white ">Rp. 100.000.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-white" style="width: 600px">Subtotal</td>
                                        <td class="text-white text-center">=</td>
                                        <td class="text-white">Rp. 200.000.00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

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
