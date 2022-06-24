<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Artikel | Morfeen </title>
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

    {{-- Detail Artikel  --}}
    <section>
        <h1 class="text-bold text-uppercase text-center  p-t-150 " style="font-size: 20px ; font-family: 'Trebuchet MS'">detail ARTIKEL</h1>
        <div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="/" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

                <a href="artikel" class="txt27">
					Artikel
				</a>

                <span class="txt29 m-l-10 m-r-10">/</span>


				<span class="txt29">
					Blog
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-30 p-b-20 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<!-- - -->
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
									<img src="images/ar1.jpg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										21
									</span>

									<span class="txt31">
										Jan, 2021
									</span>
								</div>
							</div>

							<!-- - -->
							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">Daddyteddy Band Pop Punk Asal Malang Awali 2021 dengan Luncurkan Video Clip Sirna</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										27 Januari, 2021
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
                                    Band Pop Punk yang terbentuk pada tahun 2012 ini beranggotakan Ivan sebagai vokalis, Rangga dan Ryan sebagai gitaris, Dwiki sebagai bassist dan Taufan sebagai drummer. Awal tahun ini, mereka meluncurkan karya terbarunya dalam format Music Video (MV) yang berjudul Sirna.
                                    <br>
                                    <br>
                                    "Dalam peluncurkan MV terbaru ini, kita bekerja sama dengan brand lokal Malang, yakni Morfeen Thirteen. Kenapa begitu, karena selain kita ingin menunjukan eksistensi, kita juga ingin bahwa Malang ini punya segudang hal yang bisa dibanggakan oleh masyarakatnya, khususnya anak muda," ujar Taufan, Rabu (27/01/2021).
                                    <br>
                                    <br>
                                    Taufan menjelaskan, lagu Sirna sendiri merupakan salah satu single yang masuk dalam album terbaru mereka yang saat ini masih dalam proses penggarapan. Pastinya juga Daddyteddy bakal menyuguhkan warna berbeda dari lagu-lagu sebelumnya.
								</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-30 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>


						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								Most popular
							</h4>

							<ul>
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/sukun.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Best Places for Wine
										</a>

										<span class="txt14">
											3 days ago
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/sukun.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Eggs and Cheese
										</a>

										<span class="txt14">
											July 2, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/sukun.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Style the Wedding Party
										</a>

										<span class="txt14">
											May 28, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/sukun.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Cooking recipe Delicious
										</a>

										<span class="txt14">
											May 25, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/sukun.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Pizza is prepared fresh
										</a>

										<span class="txt14">
											May 2, 2017
										</span>
									</div>
								</li>
							</ul>
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
