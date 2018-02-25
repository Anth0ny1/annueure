<header id="header">
  <div id="logo-entete">
    <a href="{{ route('home') }}">
      <img id="logo" src="{{ asset('img/logo/logo-annueure-rectangle-baseline-vector.svg') }}" alt="AnnuEure, l'annuaire des professionnels du bâtiment en Normandie">
    </a>
  </div>
  <div id="menuhp">
    <nav id="navhp">
      <ul id="menuhptop">

          <li class="{{Request::path() == '/' ? 'active' : ''}}">
            <a href="{{ route('home') }}">Accueil</a>
          </li>
          <li class="{{Request::path() == 'presentation' ? 'active' : ''}}">
            <a href="{{ route('presentation') }}">Présentation</a>
          </li>
          <li class="{{Request::path() == 'annuaire' ? 'active' : ''}}">
            <a href="{{ route('annuaire') }}">Annuaire</a>
          </li>
          <li class="{{Request::path() == 'contact' ? 'active' : ''}}">
            <a href="{{ route('nous-contacter-view') }}">Nous contacter</a>
          </li>

        @if (Auth::guest())

          <li class="{{Request::path() == 'register' ? 'active' : ''}}">
            <a href="{{ route('register') }}">Nous rejoindre</a>
          </li>
          <li class="{{Request::path() == 'login' ? 'active' : ''}}">
            <a href="{{ route('login') }}" class="{{Request::path() == 'login' ? 'active' : ''}}">
              Login
            </a>
          </li>

        @else
          <li class="dropdown show">
            <a href="#" class="dropdown-toggle {{Request::path() == 'mes-societes' ? 'active' : ''}}" id="dropdownMenuLink" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                Profil <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a href="{{ route('logout') }}" class="dropdown-item"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>

              <a href="{{ route('mes-societes') }}" class="dropdown-item {{Request::path() == 'mes-societes' ? 'active' : ''}}">
                  Ma/Mes société(s)
              </a>
            </div>
          </li>

          @if (Auth::user()->role == 'admin')
          <li><a href="{{ route('dashboard') }}">Admin</a></li>
          @endif

          @if (Auth::user()->role == 'membre' || Auth::user()->role == 'admin')
          <li class="{{Request::path() == 'formulaire-societe' ? 'active' : ''}}">
            <a href="{{ route('formulaire-societe') }}">Inscrire votre société</a>
          </li>
          @endif

        @endif
      </ul>
    </nav>
  </div>
</header>
