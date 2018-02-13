<header id="header">
  <div id="logo-entete">
    <img id="logo" src="{{ asset('img/logo/logo-annueure-carre-baseline-hp.svg') }}" alt="logo du site AnnuEure" />
  </div>
  <div id="menu">
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
      {{-- <form class="form-search" action="{{ route('search-view') }}" method="post">
        <div class="metier">
          <label for="">Métiers ?</label>
          <input type="text" name="metier" value="" placeholder="Liste des métiers">
        </div>
        <div class="ou">
          <label for="">Où ?</label>
          <input type="text" name="ville" value="" placeholder="Liste des villes">
        </div>
      </form> --}}
      {!! Form::open(['route' => 'search-action', 'method' => 'post']) !!}

        {!! Form::search('quiquoi', null, ['class' => 'form-control','placeholder' => 'Metier ou nom de la societe']) !!}
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
        <!-- Authentication Links -->
        {{-- @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
        @if (Auth::user()->role == 'membre')
          <li><a href="{{ route('formulaire-societe') }}">inscrire votre societe</a></li>
        @endif
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
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
                </ul>
            </li>
        @endif --}}
        {{-- <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li> --}}
    </ul>
  </div>
</header>
