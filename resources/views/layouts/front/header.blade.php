<header id="header">
  <div id="logo-entete">
    <a href="{{ route('home') }}"><img id="logo" src="{{ asset('img/logo/logo-annueure-rectangle-baseline-vector.svg') }}" alt="logo du site AnnuEure"></a>
  </div>
  <div id="menuhp">
    <nav id="navhp">
      <ul id="menuhptop">
          <!-- <li><a href="{{ route('home') }}">Accueil</a></li> -->

          <!-- <li><a href="{{ route('presentation') }}">Présentation</a></li> -->

          <!-- <li><a href="{{ route('nous-contacter-view') }}">Nous contacter</a></li> -->

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

          <!-- <li><a href="{{ route('home') }}" class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}">Accueil</a></li> -->

        @if (Auth::guest())
          <!-- <li><a href="{{ route('register') }}">Nous rejoindre</a></li>
          <li><a href="{{ route('login') }}">Login</a></li> -->

          <li class="{{Request::path() == 'register' ? 'active' : ''}}">
            <a href="{{ route('register') }}">Nous rejoindre</a>
          </li>

          <li class="{{Request::path() == 'login' ? 'active' : ''}}">
            <a href="{{ route('login') }}">Login</a>
          </li>

        @else
          <li class="dropdown show">
            <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                Bonjour {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a href="{{ route('logout') }}"
              class="dropdown-item"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              <a href="{{ route('mes-societes') }}"
              class="dropdown-item">
                  Ma/Mes société(s)
              </a>

            </div>
          </li>
          {{-- <ul class="dropdown-menu" role="menu"> --}}
          {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
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
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Profil
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                </li> --}}
                {{-- </ul> --}}
        @if (Auth::user()->role == 'admin')
          <li><a href="{{ route('dashboard') }}">admin</a></li>
        @endif

        @if (Auth::user()->role == 'membre')
          <li><a href="{{ route('formulaire-societe') }}">inscrire votre societe</a></li>
        @endif
      @endif
      </ul>
    </nav>
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
