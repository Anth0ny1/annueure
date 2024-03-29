<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" />
  </head>
  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('home') }}" class="site_title"><i class="fas fa-wrench"></i> <span style="color:tomato;">Annu'Eure</span></a>
            </div>
            <div class="clearfix"></div>
                                              <!-- menu profile quick info -->
                              <!-- placé à gauche du backoffice + container principal du backoffice -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!--  image du profil qui s'affiche à gauche de "Bonjour,""-->
{{-- <img src="admin/img/img.jpg" alt="..." class="img-circle profile_img"> --}}
              </div>
              <div class="profile_info">
                <span><h4 style="color:tomato;">Bonjour,</h4></span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
                                              <!-- Fin /menu profile quick info -->
            <br />
                                                   <!-- sidebar menu -->
            @include('layouts.back.menu-sidebar')
                                                   <!-- Fin /sidebar menu -->
          </div>
        </div>

        @include('layouts.back.menu-top')

                                                  <!-- page content -->
        <div class="right_col" role="main">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @if (session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif

                @if (session('danger'))
                  <div class="alert alert-danger">
                    {{ session('danger') }}
                  </div>
                @endif
                @yield('content')
              </div>
            </div>
        </div>                             <!-- Fin /page content -->

        <footer>                           <!-- footer content -->
          <div class="pull-right">
            {{-- Gentelella --}}
          </div>
          <div class="clearfix"></div>
        </footer>                          <!-- Fin /footer content -->

      </div>
    </div>
                             <!--  javascript  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/fastclick.js') }}"></script>
    <script src="{{ asset('admin/js/nprogress.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>

  </body>
</html>
