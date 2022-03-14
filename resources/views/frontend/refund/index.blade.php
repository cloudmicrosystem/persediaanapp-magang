<!DOCTYPE html>
<html lang="en">

<head>
    <title>Refund  </title>
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
                <div class="item-slick1 item1-slick1" style="background-image: url(images/About.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
    {{-- Detail Artikel  --}}
    <div id="page" class="container py-3 py-md-4">
        <div class="row">
            <div class="col-12">
                <h2 class="title text15"><strong> REFUND POLICY </strong></h2>
            </div>

            <div class="col-12 page-content m-5 ">
                <div class="tab-contents">
                    <div class="tab-content">
                        <p><strong>KEBIJAKAN PENGEMBALIAN DANA</strong></p>
                        <dl>
                            <dd>- Barang harus dikembalikan dalam waktu 5 hari setelah barang diterima.</dd>
                            <dd>- Barang harus memiliki tag asli seperti yang disertakan saat penerimaan.</dd>
                            <dd>- Kami berhak untuk menolak pengembalian dana atau penukaran apabila barang tersebut
                                telah berubahan bentuk, terjadi kerusakan, dicuci, atau ketidaklengkapan tag asli yangdisertakan.</dd>
                            <dd>- Kami tidak menjamin penukaran atau pengembalian dana untuk barang yang tidak memenuhi
                                kriteria pengembalian. Jika anda menerima produk yang mengalami kerusakan atau cacat
                                pada saat menerima pengiriman silahkan memberikan pemberitahuan terlebih dahdlu dalam
                                waktu 2 hari setelah anda menerima produk melalui email website@maternaldisaster.com
                                sebelum mengirim barang kembali.</dd>
                            <dd>- Anda dapat menggunakan jasa pengiriman lain untuk pengembalian barang. Untuk memastikan
                                kami menerima barang yang anda kirim silahkan meminta nomor pelacakan dari pengirim dan
                                konfirmasikan kepada pihak kami melalui email website@maternaldisaster.com beserta nomor
                                KONFIRMASI PEMBAYARAN anda.</dd>
                            <dd>- Kemas kembali barang pengembalian anda dengan aman.</dd>
                            <dd>- Kirim barang pengembalian anda ke alamat : Maternal Disaster Jl Wira Angun Angun No 4,Bandung.</dd>
                            <dd>- Barang baru akan di kirim setelah kami menerima barang penukaran anda dan mengkonfirmasi pengembalian atau penukaran anda.</dd>
                            <dd>- Kami tidak bertanggungjawab atas kehilangan barang pengembalian saat pengiriman kembali.</dd>
                            <dd>- Biaya pengiriman awal tidak dapat dikembalikan.</dd>
                        </dl>

                        <p><strong>KEBIJAKAN PENUKARAN BARANG</strong></p>
                        <dl>
                            <dd>1. Kami hanya dapat menukar barang untuk barang yang terapat kerusakan atau cacat, tidak
                                menerima penukaran size.</dd>
                            <dd>2. Apabila barang yang bersangkutan telah habis, dana akan dikembaddkan penuh dikurangi
                                biaya pengiriman awal setelah kami menerima pengembaddan barang anda.</dd>
                            <dd>3. Kami tidak bertanggungjawab atas kehilangan barang pengembaddan saat pengiriman
                                kembali.
                            </dd>
                        </dl>
                    </div>
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
