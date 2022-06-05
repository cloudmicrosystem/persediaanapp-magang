<!DOCTYPE html>
<html lang="en">

<head>
    <title>How To Order | Morfeen </title>
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

<body class="animsition" style="background: black">

    <!-- Header -->
    @include('frontend.halcust.header')

    <!-- Sidebar -->
    @include('frontend.halcust.sidebar')

    <!-- Slide1 -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/banner/bghot.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    {{-- Detail Artikel --}}
    <div id="page" class="container py-3 py-md-4 pt-3 pb-3">
        <div class="row">
            <div class="col-12 page-content m-5 ">
                <div class="tab-content">
                    <p class="text-white"><strong>CARA PEMESANAN</strong></p><br>
                    {{-- <div class="row mt-2 pl-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                    href="#product-desc" role="tab" aria-controls="product-desc"
                                    aria-selected="true">INDONESIA</a>
                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                    href="#product-comments" role="tab" aria-controls="product-comments"
                                    aria-selected="false">ENGLISH</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                aria-labelledby="product-desc-tab">
                                <dl>
                                    <dd class="text-white">1. Pilih barang yang akan dibeli pada halaman PRODUCT,
                                        lalu klik barang
                                        tersebut dan anda akan otomatis masuk ke halaman DETAIL PRODUCT.</dd>
                                    </dd>
                                    <dd class="text-white">2. Isi berapa jumlah order pada kolom QUANTITY produk
                                        kemudian
                                        KLIK ADD TO CART. Setelah CART terisi anda dapat melakukan perubahan order yang
                                        tidak
                                        diinginkan atau mengubah jumlah order pada halaman SHOPPING CART.</dd>
                                    <dd class="text-white">3. Isi informasi diri pada halaman ORDER DETAIL. Apabila
                                        ingin
                                        memberikan instruksi khusus pada pemesanan yang anda lakukan, anda dapat
                                        memberikan
                                        catatan pada kolom CATATAN yang telah kami sediakan pada bagian terbawah halaman
                                        ORDER
                                        DETAIL.</dd>
                                    <dd class="text-white">4. Setelah informasi lengkap, anda akan mendapatkan Email
                                        berupa
                                        INVOICE dan KODE KONFIRMASI PEMBAYARAN.</dd>
                                    <dd class="text-white">5. Segera lakukan pembayaran. Sertakan KODE KONFIRMASI
                                        PEMBAYARAN
                                        pada saat anda melakukan pembayaran baik melalui ATM atau INTERNET BANKING.</dd>
                                    <dd class="text-white">6. Setelah melakukan pembayaran segera lakukan konfirmasi
                                        dengan
                                        cara mencantumkan KODE KONFIRMASI PEMBAYARAN. Kami akan memvalidasi status
                                        pembayaran
                                        dan mengirimkan order sesuai pesanan.</dd>
                                </dl>

                            </div>
                            <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                aria-labelledby="product-comments-tab">
                                <dl>
                                    <dd class="text-white">1. Select the item to be purchased on the PRODUCT page, then click the item
                                        and you will automatically go to the PRODUCT DETAILS page.</dd>
                                    </dd>
                                    <dd class="text-white">2. Fill in the number of orders in the product QUANTITY column
                                        then
                                        CLICK ADD TO CART. After the CART is filled, you can make changes to the existing order
                                        no
                                        desired or change the order quantity on the SHOPPING CART page.</dd>
                                    <dd class="text-white">3. Fill in your personal information on the ORDER DETAIL page. If
                                        want to
                                        provide specific instructions on the order you place, you can
                                        give
                                        notes in the NOTES column that we have provided at the bottom of the page
                                        ORDER
                                        DETAILS.</dd>
                                    <dd class="text-white">4. After complete information, you will get an Email
                                        in the form of
                                        INVOICE and PAYMENT CONFIRMATION CODE.</dd>
                                    <dd class="text-white">5. Immediately make payment. Include CONFIRMATION CODE
                                        PAYMENT
                                        when you make a payment either via ATM or INTERNET BANKING.</dd>
                                    <dd class="text-white">6. After making the payment, confirm immediately
                                        with
                                        how to include PAYMENT CONFIRMATION CODE. We will validate the status
                                        payment
                                        and send orders as ordered.</dd>
                                </dl>
                            </div>
                    </div> --}}
                    <dl>
                        <dd class="text-white">1. Pilih barang yang akan dibeli pada halaman PRODUCT, lalu klik barang
                            tersebut dan anda akan otomatis masuk ke halaman DETAIL PRODUCT.</dd>
                        </dd>
                        <dd class="text-white">2. Isi berapa jumlah order pada kolom QUANTITY produk kemudian
                            KLIK ADD TO CART. Setelah CART terisi anda dapat melakukan perubahan order yang tidak
                            diinginkan atau mengubah jumlah order pada halaman SHOPPING CART.</dd>
                        <dd class="text-white">3. Isi informasi diri pada halaman ORDER DETAIL. Apabila ingin
                            memberikan instruksi khusus pada pemesanan yang anda lakukan, anda dapat memberikan
                            catatan pada kolom CATATAN yang telah kami sediakan pada bagian terbawah halaman ORDER
                            DETAIL.</dd>
                        <dd class="text-white">4. Setelah informasi lengkap, anda akan mendapatkan Email berupa
                            INVOICE dan KODE KONFIRMASI PEMBAYARAN.</dd>
                        <dd class="text-white">5. Segera lakukan pembayaran. Sertakan KODE KONFIRMASI PEMBAYARAN
                            pada saat anda melakukan pembayaran baik melalui ATM atau INTERNET BANKING.</dd>
                        <dd class="text-white">6. Setelah melakukan pembayaran segera lakukan konfirmasi dengan
                            cara mencantumkan KODE KONFIRMASI PEMBAYARAN. Kami akan memvalidasi status pembayaran
                            dan mengirimkan order sesuai pesanan.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>



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
