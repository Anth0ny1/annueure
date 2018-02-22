<!-- Sidebar left (gauche) -->
<aside class="sidebarLeft">
    <div class="pictoSidebarLeft picto-box">
      <ul>
        <li>
          <a href="{{ route('annuaire') }}">{!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}
          </a>
          <p class="labelPicto">Annuaire des Pro</p>
        </li>
        <li>
          <a href="{{ route('register') }}">{!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}
          </a>
          <p class="labelPicto">Inscription des Pro</p>
        </li>
        <li>
          <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}
          </a>
          <p class="labelPicto">Prendre un rendez-vous</p>
        </li>
        <li>
          <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
          </a>
          <p class="labelPicto">Demander un devis</p>
        </li>
      </ul>
    </div>
</aside>
