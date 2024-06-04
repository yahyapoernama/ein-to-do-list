<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($page) ? $page . ' - ' : null }} {{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/app/favicon-white.png') }}" />
    <!-- Custom Stylesheet -->
    @include('auth.layouts.styles')
</head>

<body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper p-0">
        <div class="authentication section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        @yield('content')
                        <div class="dark-light-toggle" id="change-theme" onclick="themeToggle()">
                            <span class="dark"><i class="icofont-moon"></i></span>
                            <span class="light"><i class="icofont-sun-alt"></i></span>
                        </div>
                        {{-- <span id="change-theme" class="pb-1 pe-2">
                            <i class="fa fa-2xl fa-sun text-light" @if(Session::get('theme') != 'dark-theme') style="display:none" @endif 
                                id="change-theme-light"></i>
                            <i class="fa fa-2xl fa-moon text-dark" @if(Session::get('theme') == 'dark-theme') style="display:none" @endif 
                                id="change-theme-dark"></i>
                        </span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('auth.layouts.scripts')
</body>

</html>