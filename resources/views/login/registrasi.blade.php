<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi | Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('assetlog/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assetlog/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ __('Register') }}">
                    @csrf
					<span class="login100-form-title p-b-43">
						Registrasi
					</span>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nama" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Nama</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="alamat" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="no_hp" required>
						<span class="focus-input100"></span>
						<span class="label-input100">No Handphone</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Register') }}
						</button>
					</div>
                    <div class="container-login100-form-btn">
                        <a href="{{ url ('/login')}}" class="login100-form-btn" style="background: transparent; border:transparent; color:black">Back Login</a>
                    </div>
				</form>
				<div class="login100-more" style="background-image: url('images/login.JPG');">
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assetlog/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assetlog/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assetlog/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assetlog/js/main.js') }}"></script>

</body>
</html>
