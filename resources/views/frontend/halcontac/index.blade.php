<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Morfeen </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <div class="item-slick1 item1-slick1" style="background-image: url(images/banner/bgkontak.jpg);">
                </div>
            </div>
        </div>
    </section>

    {{-- ISI HALAMAN CONTAC --}}

    {{-- <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-6">
                        <div class="content">
                            <a href="https://api.whatsapp.com/send/?phone=%2B6282229278641&text&app_absent=0"
                                ><i class="fa fa-whatsapp" aria-hidden="true" style="width: 21px"></i></a>
                                <br>
                            <a href="https://www.instagram.com/morfeen.official/" class="fs-15 c-white"><i
                                    class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
                                <br>
                            <a href="https://www.facebook.com/MorfeenStore/photos/?ref=page_internal"
                                class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                                <br>
                            <a href="https://www.youtube.com/channel/UCqGqu3HSKaThJK1VXRoXnVg"
                                class="fs-15 c-white"><i class="fa fa-youtube m-l-18" aria-hidden="true"></i></a>
                                <br>
                            <a href="https://shopee.co.id/morfeen.official"
                                class="fs-15 c-white"><i aria-hidden="true"><img class="pr-5" style="width: 4%" src="images/icons/shp.png" alt=""></i></a>
                        </div>
                </div>
                <div class="col-6">
                    <h3>TES</h3>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="content ">
        <div class="card border border-dark">
            <div class="card-body  d-flex align-items-center justify-content-center" style="background: black" >
                <div class="col-6 text-center ">
                        <h2 style="color: white"><strong>MORFEEN THERTEEN</strong></h2>
                        <p class="lead mb-5" style="color: white">MALANG</p>
                </div>

                <div class="col-6 pt-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-20 ">
                        SOSIAL MEDIA
                    </h4>
                    <ul class="m-b-70">
                        <li class="txt14 m-b-14 " style="color: white">
                            <i class="fa fa-whatsapp fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            (+62) 887-4116-4285
                        </li>

                        <li class="txt14 m-b-14" style="color: white">
                            <i class="fa fa-instagram fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            morfeen_official
                        </li>

                        <li class="txt14 m-b-14" style="color: white">
                            <i class="fa fa-facebook fs-16 dis-inline-block size19 " aria-hidden="true"></i>
                            morfeen_official
                        </li>

                        <li class="txt14 m-b-14" style="color: white">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            morfeen.selfporject@gmail.com
                        </li>
                    </ul>
                </div>
                    {{-- <div class="form-group">
                        <label style="color: white" for="inputName">Name</label>
                        <input style="background-color: black "  type="text" class="form-control border border-white" placeholder="Name"/>
                    </div>
                    <div class="form-group ">
                        <label style="color: white" for="inputEmail">E-Mail</label>
                        <input style="background-color: black" style="border: white" type="email" class="form-control border border-white" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                        <label style="color: white" for="inputSubject">Subject</label>
                        <input style="background-color: black" type="text" class="form-control border border-white" placeholder="Subject"/>
                    </div>
                    <div class="form-group">
                        <label style="color: white" for="inputMessage">Message</label>
                        <textarea style="background-color: black" id="inputMessage" class="form-control border border-white" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group m-3" >
                        <input type="submit" class="btn btn-dark" value="Send message">
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

</body>

</html>
