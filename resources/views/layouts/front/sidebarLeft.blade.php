<aside class="sidebarLeft">
  <div class="pictoSidebarLeft picto-box">
    <ul>
      <li>
        <a href="{{ route('annuaire') }}">
          {!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}
        </a>
        <p class="labelPicto">
          <a href="{{ route('annuaire') }}">Annuaire des Pro</a></p>
      </li>
      <li>
        <a href="{{ route('register') }}">
          {!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}
        </a>
        <p class="labelPicto">
          <a href="{{ route('register') }}">Inscription des Pro</a></p>
      </li>
      <li>
        <a href="{{ route('nous-contacter-view') }}">
          {!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}
        </a>
        <p class="labelPicto">
          <a href="{{ route('nous-contacter-view') }}">Prendre un rendez-vous</a></p>
      </li>
      <li>
        <a href="{{ route('nous-contacter-view') }}">
          {!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
        </a>
        <p class="labelPicto">
          <a href="{{ route('nous-contacter-view') }}">Demander un devis</a></p>
      </li>
    </ul>
  </div>
</aside>
