<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/plugins/login/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="cont">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="form sign-in">
            <h2>Sign In</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="" type="email" name="email" :value="old('email')" />
                </label>
                <label>
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="" type="password" name="password" required
                        autocomplete="current-password" />
                </label>

                <br>
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>

                <p class="forgot-pass">
                    @if (Route::has('password.request'))
                        <a class="text-muted1" href="{{ route('password.request') }}"
                            style="margin-right: 15px; margin-top: 15px;">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </p>
            </form>
            <div class="social-media">
                <ul>
                    <li><img src="logo/facebook.png"></li>
                    <li><img src="logo/twitter.png"></li>
                    <li><img src="logo/linkedin.png"></li>
                    <li><img src="logo/instagram.png"></li>
                </ul>
            </div>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img-btn ">
                    <span class="m-up">Sign up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" style="overflow:auto">
                    @csrf

                    <h2>Sign Up</h2>
                    <div >
                        <div class="menu">
                            <label>
                                <x-label for="name" :value="__('Nama')" />

                                <x-input id="name" class="" type="text" name="nama" :value="old('name')"
                                    required autofocus />
                            </label>
                            <label>
                                <div class="mt-4">
                                    <x-label for="alamat" :value="__('Alamat')" />

                                    <x-input id="alamat" class="" type="text" name="alamat"
                                        :value="old('alamat')" required />
                                </div>
                            </label>
                            <label>
                                <div class="mt-4">
                                    <x-label for="no_hp" :value="__('No Hp')" />

                                    <x-input id="no_hp" class="" type="number" name="no_hp"
                                        :value="old('no_hp')" required />
                                </div>
                            </label>
                            <label>
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="" type="email" name="email"
                                        :value="old('email')" required />
                                </div>
                            </label>
                            <label>
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="" type="password" name="password"
                                        required autocomplete="new-password" />
                                </div>
                            </label>
                            <label>
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="" type="password"
                                        name="password_confirmation" required />
                                </div>
                            </label>
                            <br>
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/login/script.js"></script>
</body>

</html>
