<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetcus/css/demo.css') }}" />
    <script src="{{ asset('assetcus/js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('assetcus/js/vendor/jquery.js') }}"></script>

    <!-- xzoom plugin here -->
    <script type="text/javascript" src="{{ asset('assetcus/js/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/xzoom.css') }}" media="all" />
    <!-- hammer plugin here -->
    <script type="text/javascript" src="assetcus/hammer.js/1.0.5/jquery.hammer.min.js"></script>
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assetcus/fancybox/source/jquery.fancybox.css') }}" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assetcus/magnific-popup/css/magnific-popup.css') }}" />
    <script type="text/javascript" src="{{ asset('assetcus/fancybox/source/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assetcus/magnific-popup/js/magnific-popup.js') }}"></script>


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
    {{-- CSS Class Content --}}
    @stack('custom-css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    {{-- css keranjang --}}
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.0/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="{{ asset('assetcus/cs/style.css') }}" rel="stylesheet" type="text/css" />
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
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content" class="pading-top0 ">
        <div class="d-flex justify-content-center">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 p-t-30">
                            <h3 class="my-2">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                                terr.
                            </p>
                            <hr>
                            <h5 class="mt-2">Size</h5>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text">S</span>
                                    <br>
                                    Small
                                </label>
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                                    <span class="text">M</span>
                                    <br>
                                    Medium
                                </label>
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                                    <span class="text">L</span>
                                    <br>
                                    Large
                                </label>
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                                    <span class="text">XL</span>
                                    <br>
                                    Xtra-Large
                                </label>
                            </div>
                            <div class="bg-gray py-1 px-1 mt-2">
                                <h1 class="mb-0">
                                    $80.00
                                </h1>
                            </div>

                            <div class="mt-2">
                                {{-- <div class="product-select">
                                    <form>

                                        <div class="form-group">
                                            <label>Color</label>
                                            <select class="form-control">
                                                <option>-- Color --</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" value="1"/>
                                            </div>
                                            <div class="col-md-5">
                                                <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="btn btn-secondary"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="" />
                                    </div>
                                    <div class="btn btn-dark btn-lg btn-flat">
                                        <i class="fas fa-cart-plus "></i>
                                        Add to Cart
                                    </div>
                                    <div class="btn btn-default btn-lg btn-flat">
                                        <i class="fas fa-heart fa-lg mr-2"></i>
                                        Add to Wishlist
                                    </div>
                                </div>
                            </div>

                            {{-- Keranjang --}}
                            <div class="mt-2">
                                <div class="span6">

                                    <div class="product-Info">
                                        <span class="keranjang_quantity"></span> items
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



                                    {{-- <div class="product-total">

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

                                    </div> --}}
                                </div><!-- /span6 -->
                            </div>

                            <div class="mt-3 product-share">
                                <a href="#" class="text-gray">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i classx="fab fa-twitter-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-envelope-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-rss-square fa-2x"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 p-t-30">
                            <div class="xzoom-container">
                                <div class="col-20">
                                    <img class="xzoom" id="xzoom-default" src="images/d2.jpeg"
                                        xoriginal="images/images/d2.jpeg" />
                                </div>
                                <br>
                                <div class="xzoom-thumbs">
                                    {{-- @foreach ($bar as $key => $value)
                                        @foreach ($value['gambar'] as $item)
                                            <img src="{{ asset('images/katalog/' . $item['url_gambar']) }}"
                                                alt="{{ $value['nama_barang'] }}" width="100px" height="100px" />
                                        @endforeach
                                    @endforeach --}}
                                    <a href="images/d1.jpeg"><img class="xzoom-gallery" width="80"
                                            xpreview="images/d1.jpeg"></a>
                                    <a href="images/d2.jpeg"><img class="xzoom-gallery" width="80"
                                            src="images/d2.jpeg"></a>
                                    <a href="images/d3.jpeg"><img class="xzoom-gallery" width="80"
                                            src="images/d3.jpeg"></a>
                                    <a href="images/d1.jpeg"><img class="xzoom-gallery" width="80"
                                            src="images/d1.jpeg"></a>
                                </div>
                            </div>
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

    {{-- js keranjang --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assetcus/js/cart.js') }}"></script>

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
