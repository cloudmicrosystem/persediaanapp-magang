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

    <title>Detail | Morfeen </title>

    {{-- CSS Class Content --}}
    @stack('custom-css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

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

    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/rating.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/vendors/lightbox2/css/lightbox.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetcus/css/main.css') }}">
    <!--===============================================================================================-->
    <link href="{{ asset('assetcus/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assetcus/css/owl.carousel.min.css') }}">




    <!-- css keranjang -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.0/css/bootstrap-combined.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('assetcus/cs/style.css') }}" rel="stylesheet" type="text/css" /> --}}
</head>

<body class="animsition">

    <!-- Header -->
    @include('frontend.halcust.header')


    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-100 p-b-20">
            <li class="t-center m-b-13">
                <h4 class="txt13 m-b-20" style="color: black">
                    Menu
                </h4>
            </li>
            <li class="t-center m-b-13">
                <a href="/" class="txt19">Home</a>
            </li>

            <li class="t-center m-b-13">
                <a href="/product" class="txt19">Product</a>
            </li>

            <li class="t-center m-b-13">
                <a href="/store" class="txt19">Store</a>
            </li>

            <li class="t-center m-b-13">
                <a href="/artikel" class="txt19">Artikel</a>
            </li>

            <li class="t-center m-b-13">
                <a href="/about" class="txt19">About</a>
            </li>

            <li class="t-center m-b-33">
                <a href="/contact" class="txt19">Contact</a>
            </li>
        </ul>

    </aside>


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

    <section class="content">
        <div class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href="/" class="txt27">
                    Home
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <a href="product" class="txt27">
                    Product
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>


                <span class="txt29">
                    Detail Product
                </span>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-4 pt-3 pl-3 pb-3">
                            <h3 class="my-2">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                stumptown
                                aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui
                                irure
                                terr.
                            </p>

                            <div class="bg-black py--0 px-00 mt-2">
                                <h3 class="mb-0 text-center">
                                    Rp. 150,000,00
                                </h3>
                            </div>

                            <h5 class="mt-2">Size</h5>
                            {{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-dark text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text">S</span>

                                </label>
                                <label class="btn btn-dark text-center">
                                    <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                                    <span class="text">M</span>

                                </label>
                                <label class="btn btn-dark text-center">
                                    <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                                    <span class="text">L</span>

                                </label>
                                <label class="btn btn-dark text-center">
                                    <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                                    <span class="text">XL</span>

                                </label>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <select class="form-control ">
                                        <option>Size</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                            </div>

                            <h5>Quantity</h5>
                            <div class="mt-2 ">
                                <div class="col-md-12">
                                    <input type="number"  class="form-control px-0 py-0"
                                        placeholder="Qty" value="" />

                                    {{-- <div class="input-group text-center mb-4 " style="width: 130px;">
                                        <button class="input-group-text decrement-btn">-</button>
                                        <input type="text" name="quantity " class="form-control qty-input text-center"
                                            value="1">
                                        <button class="input-group-text increment-btn">+</button>
                                    </div> --}}

                                        <div class=" btn btn-dark btn-lg btn-flat px-0 py-2 mt-1">
                                            <i class="fas fa-shopping-cart "></i>
                                            Add to Cart
                                        </div>
                                        <div class="btn btn-dark btn-lg btn-flat px-0 py-2 pl-0 mt-1">
                                            <i class="fas fa-heart fa-lg "></i>
                                            Add to Wishlist
                                        </div>
                                        {{-- <ul class="btn btn-dark btn-lg btn-flat px-0 py-0 pl-0 mt-1">
                                        <li>
                                            <a href="/whislist"><i class="fas fa-heart fa-lg "></i>
                                                Add to Wishlist</a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>

                            <!-- Keranjang -->
                            {{-- <div class="mt-2">
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
                                </div> <!-- /span6 -->
                            </div> --}}

                        </div>

                        <div class="col-12 col-sm-6 p-t-30 pl-4">
                            <div class="xzoom-container">
                                <img class="xzoom" style="height: 300px; width: 500px" id="xzoom-default"
                                    src="images/d2.jpeg" xoriginal="images/images/d2.jpeg" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-2 p-t-30 pl-4  ">
                            <div class="xzoom-thumbs">
                                <a href="images/d1.jpeg"> <img class="xzoom-gallery" width="100"
                                        src="images/d1.jpeg" xpreview="images/d1.jpeg"></a>
                                <a href="images/d2.jpeg"> <img class="xzoom-gallery" width="100"
                                        src="images/d2.jpeg"></a>
                                <a href="images/d3.jpeg"> <img class="xzoom-gallery" width="100"
                                        src="images/d3.jpeg"></a>
                                <a href="images/d1.jpeg"> <img class="xzoom-gallery" width="100"
                                        src="images/d1.jpeg"></a>
                            </div>
                        </div>

                        <div class="row mt-2 pl-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                        href="#product-comments" role="tab" aria-controls="product-comments"
                                        aria-selected="false">Comments</a>
                                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                        href="#product-rating" role="tab" aria-controls="product-rating"
                                        aria-selected="false">Rating</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at
                                    efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed
                                    rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh,
                                    congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis.
                                    Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus.
                                    Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida
                                    velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque
                                    justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante.
                                    Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non
                                    convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id
                                    enim a erat fringilla sollicitudin ultrices vel metus. </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                    aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus.
                                    Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et
                                    finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum,
                                    venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna.
                                    Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris
                                    hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
                                    dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis
                                    dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex
                                    ullamcorper, ornare velit vel, tincidunt ipsum. </div>

                                <div class="tab-pane fade" id="product-rating" role="tabpanel"
                                    aria-labelledby="product-rating-tab">

                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                        Rating
                                    </button>

                                    <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content " style="background-color: transparant">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Rating Product</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="rating-css">
                                                        <div class="star-icon">
                                                            <input type="radio" value="1"
                                                                name="product_rating" checked id="rating1">
                                                            <label for="rating1" class="fa fa-star"></label>
                                                            <input type="radio" value="2"
                                                                name="product_rating" id="rating2">
                                                            <label for="rating2" class="fa fa-star"></label>
                                                            <input type="radio" value="3"
                                                                name="product_rating" id="rating3">
                                                            <label for="rating3" class="fa fa-star"></label>
                                                            <input type="radio" value="4"
                                                                name="product_rating" id="rating4">
                                                            <label for="rating4" class="fa fa-star"></label>
                                                            <input type="radio" value="5"
                                                                name="product_rating" id="rating5">
                                                            <label for="rating5" class="fa fa-star"></label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"
                                                        data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
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

    <!--  js keranjang  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assetcus/js/cart.js') }}"></script>

    <script src="{{ asset('assetcus/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetcus/js/jquery-3.6.0.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.increment-btn').click(function(e) {
                e.preventDefault();

                var inc_value = $('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNan(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $('.qty-input').val(value);
                }
            });

            $('.decrement-btn').click(function(e) {
                e.preventDefault();

                var dec_value = $('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNan(value) ? 0 : value;
                if (value > 10) {
                    value--;
                    $('.qty-input').val(value);
                }
            });

        });
    </script>

</body>

</html>
