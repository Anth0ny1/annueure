<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylepresentation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontsheet.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}"> --}}
    @yield('css')
  </head>

  <body>
    <div id="wrapper">
      @include('layouts.front.header')
        @yield('content')
      @include('layouts.front.footer')
    </div>

      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    @yield('js')
  </body>
</html>
