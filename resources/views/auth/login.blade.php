<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/app/favicon-white.png') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/qash/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
</head>

<body class="{{ Session::get('theme') }}">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper p-0">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <img src="{{ asset('assets/img/app/favicon-white.png') }}" alt="" class="w-25 rounded-circle shadow">
                            <h4 class="card-title mt-4">Sign in to <b>{{ config('app.name') }}</b></h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form class="signin_validate row g-3" method="POST" action="{{ route('login') }}">
                                    @error('user') 
                                        <div class="col-12">
                                            <div class="alert alert-danger mb-1 text-center">{{ implode('', $errors->get('user')) }} </div>
                                        </div>
                                    @enderror
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    {{-- <div class="col-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-6 text-end">
                                        <a href="reset.html">Forgot Password?</a>
                                    </div> --}}
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block" id="btn_submit">
                                            Sign in
                                        </button>
                                    </div>
                                </form>
                                <p class="mt-3 mb-0">
                                    Don't have an account?
                                    <a class="text-primary" href="{{ route('register') }}">Sign up</a>
                                </p>
                            </div>
                        </div>
                        {{-- <div class="privacy-link">
                            <a href="signup.html">Have an issue with 2-factor authentication?</a>
                            <br />
                            <a href="signup.html">Privacy Policy</a>
                        </div> --}}
                        <span id="change-theme" class="pb-1 pe-2">
                            <i class="fa fa-2xl fa-sun text-light" @if(Session::get('theme') != 'dark-theme') style="display:none" @endif 
                                id="change-theme-light"></i>
                            <i class="fa fa-2xl fa-moon text-dark" @if(Session::get('theme') == 'dark-theme') style="display:none" @endif 
                                id="change-theme-dark"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/qash/js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom-scripts.js') }}"></script>
    <script>
        $('#change-theme').click(function() {
            var theme = 'dark-theme';
            if ($('body').hasClass('dark-theme')) {
                theme = 'light-theme';
            }
            if (theme == 'dark-theme') {
                $('body').addClass('dark-theme');
                $('#change-theme-dark').slideUp();
                $('#change-theme-light').slideDown();
            } else {
                $('body').removeClass('dark-theme');
                $('#change-theme-dark').slideDown();
                $('#change-theme-light').slideUp();
            }
            $.ajax({
                url: '{{ route("general.change_theme") }}',
                type: 'POST',
                data: {
                    theme: theme,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $("form").submit(function(){
            console.log('submitted');
            $('#btn_submit').html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
        });
    </script>
</body>

</html>
