<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>@yield('title')</title>
  </head>

  <body>
    <header id="header">
      <div id="logo-entete">
        <img id="logo" src="{{ asset('img/logo/logo-annueure-carre-baseline-hp.svg') }}" alt="logo du site AnnuEure" />
      </div>
      <div id="menu">
        <h2 class="titre">Annu'Eure</h2>
        <nav id="nav">
          <ul>
              <li><a href="{{ route('home') }}">Accueil</a></li>
              <li><a href="{{ route('presentation') }}">Présentation</a></li>
              <li><a href="{{ route('nous-contacter-view') }}">Nous contacter</a></li>

            @if (Auth::guest())
              <li><a href="{{ route('register') }}">Nous rejoindre</a></li>
              <li><a href="{{ route('login') }}">Login</a></li>
            @else
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
            @if (Auth::user()->role == 'admin')
              <li><a href="{{ route('dashboard') }}">admin</a></li>
            @endif

            @if (Auth::user()->role == 'membre')
              <li><a href="{{ route('formulaire-societe') }}">inscrire votre societe</a></li>
            @endif
          @endif
          </ul>
        </nav>
        <div class="search">
          {!! Form::open(['route' => 'search-action', 'method' => 'post']) !!}

            {!! Form::search('quiquoi', null, ['class' => 'form-control','placeholder' => 'Métier ou nom de la société']) !!}
            {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}

            {!! Form::search('ou', null, ['class' => 'form-control','placeholder' => 'Ville ou code postal']) !!}
            {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}

            {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

          {!! Form::close() !!}
        </div>
      </div>

      <div id="login">
        <!-- login aligne a droite dans la barre de nav -->
        <ul class="nav navbar-nav navbar-right">

        </ul>
      </div>
    </header>
    <section id="actualite">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="{{ asset('img/slide01.jpg') }}" />
          </li>
          <li>
            <img src="{{ asset('img/slide02.jpg') }}" />
          </li>
          <li>
            <img src="{{ asset('img/slide03.jpg') }}" />
          </li>
        </ul>
      </div>
      <div class="services">
        <div id="annuaire-pro">
          <div class="">
            <img src="" alt="" />
          </div>
          <div class="bloc-text">
            <h4>Annuaire des Pro</h4>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
          </div>
          <div class="bloc-text">
            <h4>Inscription des Pro</h4>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
          </div>
          <div class="bloc-text">
            <h4>Prendre un rendez-vous</h4>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
          </div>
          <div class="bloc-text">
            <h4>Demander un devis</h4>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
          </div>
        </div>
      </div>
    </section>
    <aside id="flux-RSS">
      <div class"rss">
      </div>
      <div class"rss">
      </div>
      <div class"rss">
      </div>
    </aside>
@yield('content')
  <footer id="footer">
  </footer>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

  <script type="text/javascript" charset="utf-8">
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });
  </script>

</html>
