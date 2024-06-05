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
    @include('layouts.styles')
  </head>

  <body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      @include('layouts.header')

      @include('layouts.sidebar')

      @yield('content')
    </div>

    @include('layouts.scripts')
  </body>
</html>
