<!DOCTYPE html>
<html lang="en">

<head>
    <title>Refund | Morfeen </title>
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

<body class="animsition boeder border-dark" style="background: black ;border-block-start-color: burlywood">

    <!-- Header -->
    @include('frontend.halcust.header')

    <!-- Sidebar -->
    @include('frontend.halcust.sidebar')

    {{-- Halaman Refund --}}
    <p class="text-bold text-uppercase text-center text-white p-t-120"
        style="font-size: 20px ; font-family: 'Trebuchet MS'"></p>
    <div id="page" class="container pt-3 pb-3 py-3 py-md-4">
        <div class="row">
            <div class="col-12 page-content   ">
                <p class="text-white"><strong>KEBIJAKAN PENGEMBALIAN DANA</strong></p><br>
                <dl>
                    <dd class="text-white">- Barang harus dikembalikan dalam waktu 5 hari setelah barang
                        diterima.</dd>
                    <dd class="text-white">- Barang harus memiliki tag asli seperti yang disertakan saat
                        penerimaan.</dd>
                    <dd class="text-white">- Kami berhak untuk menolak pengembalian dana atau penukaran
                        apabila barang  <p class="pl-2 text-white"> tersebut
                        telah berubahan bentuk, terjadi kerusakan, dicuci, atau ketidaklengkapan </p> <p class="pl-2 text-white"> tag asli
                        yang disertakan. </p> </dd>
                    <dd class="text-white">- Kami tidak menjamin penukaran atau pengembalian dana untuk
                        barang yang tidak memenuhi
                        kriteria pengembalian. Jika anda menerima <p class="pl-2 text-white"> produk yang mengalami kerusakan atau cacat
                        pada saat menerima pengiriman silahkan memberikan pemberitahuan terlebih dahdlu dalam </p>
                        <p class="pl-2 text-white"> waktu 2 hari setelah anda menerima produk melalui email morfeen.selfporject@gmail.com
                        sebelum mengirim barang kembali. </p></dd>
                    <dd class="text-white">- Anda dapat menggunakan jasa pengiriman lain untuk pengembalian
                        barang. Untuk memastikan
                        kami menerima barang yang anda kirim <p class="pl-2 text-white"> silahkan meminta nomor pelacakan dari pengirim dan
                        konfirmasikan kepada pihak kami melalui email morfeen.selfporject@gmail.com beserta </p>
                        <p class="pl-2 text-white">  KONFIRMASI PEMBAYARAN anda.</p> </dd>
                    <dd class="text-white">- Kemas kembali barang pengembalian anda dengan aman.</dd>
                    <dd class="text-white">- Kirim barang pengembalian anda ke alamat : Jl. Suwari Sel., Sukun, Kec.
                        Sukun, Kota Malang, Jawa Timur 65147</dd>
                    <dd class="text-white">- Barang baru akan di kirim setelah kami menerima barang
                        penukaran anda dan mengkonfirmasi pengembalian atau penukaran anda.</dd>
                    <dd class="text-white">- Kami tidak bertanggungjawab atas kehilangan barang pengembalian
                        saat pengiriman kembali.</dd>
                    <dd class="text-white">- Biaya pengiriman awal tidak dapat dikembalikan.</dd>
                </dl>

                <p class="text-white mt-3"><strong>KEBIJAKAN PENUKARAN BARANG</strong></p><br>
                <dl>
                    <dd class="text-white">1. Kami hanya dapat menukar barang untuk barang yang terapat
                        kerusakan atau cacat, tidak
                        menerima penukaran size.</dd>
                    <dd class="text-white">2. Apabila barang yang bersangkutan telah habis, dana akan
                        dikembalikan penuh dikurangi
                        biaya pengiriman awal setelah kami menerima <p class="pl-2 text-white">  pengembalian barang anda. </p></dd>
                    <dd class="text-white">3. Kami tidak bertanggungjawab atas kehilangan barang
                        pengembalian saat pengiriman
                        kembali.
                    </dd>
                </dl>
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
