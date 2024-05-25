<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/qash/images/favicon.png') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/qash/css/style.css') }}" />
</head>

<body class="{{ Session::get('theme') }}">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper p-0">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="./intro.html"><img src="{{ asset('vendor/qash/images/logo.png') }}" alt="" /></a>
                            <h4 class="card-title mt-3">Sign in to Qash</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form class="signin_validate row g-3" action="otp-2.html">
                                    <div class="col-12">
                                        <input type="email" class="form-control" placeholder="hello@example.com"
                                            name="email" />
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" />
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="reset.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Sign in
                                        </button>
                                    </div>
                                </form>
                                <p class="mt-3 mb-0">
                                    Don't have an account?
                                    <a class="text-primary" href="signup.html">Sign up</a>
                                </p>
                            </div>
                        </div>
                        {{-- <div class="privacy-link">
                            <a href="signup.html">Have an issue with 2-factor authentication?</a>
                            <br />
                            <a href="signup.html">Privacy Policy</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/qash/js/scripts.js') }}"></script>
    <script></script>
</body>

</html>
