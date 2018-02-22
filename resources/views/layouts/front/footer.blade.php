  <!-- start footer -->
  <footer id="footer">
    <div class="footerLinks">
      <div class="footerOneColText">
        <p class="footerOneColTitle">5 derniers inscrits</p>

          <!-- affichage des 3 derniers inscrits dans l'annuaire -->
          <?php $societies = App\Society::orderBy('created_at', 'desc')->limit(5)->get(); ?>
          @foreach ($societies as $society)
            <p class="footerLinkText">
              <a href="{{ route('annuaire-profil-societe',['id' => $society->id])}}">{{ $society->name_society }}
              </a>
            </p>
          @endforeach

      </div>

      <div class="footerOneColText">
        <p class="footerOneColTitle">Liens utiles</p>
        <p class="footerLinkText">
          <a href="{{route('nous-contacter-view')}}">Nous contacter</a>
        </p>
        <p class="footerLinkText">
          <a href="{{route('register')}}">Nous rejoindre</a>
        </p>
        <p class="footerLinkText">
          <a href="{{route('annuaire')}}">Annuaire</a>
        </p>
        <p class="footerLinkText">
          <a href="{{route('mentions-legales')}}">Mentions-legales</a>
        </p>
      </div>

      <div class="footerOneColText">
        <p class="footerOneColTitle">Remerciements</p>
        <p class="footerLinkText">
          <a href="http://www.wf3.fr/" target="_blank">Webforce3</a>
        </p>
        <p class="footerLinkText">
          <a href="http://www.eure.cci.fr/" target="_blank">CCI de l'Eure</a>
        </p>
        <p class="footerLinkText">
          <a href="https://www.pole-emploi.fr/accueil/" target="_blank">Pôle Emploi</a>
        </p>
        <p class="footerLinkText">
          <a href="http://www.weblitzer.fr" target="_blank">Quidel Antoine</a>
        </p>
        <p class="footerLinkText">
          <a href="https://fredericnoel.com" target="_blank">Noël Frédéric</a>
        </p>
      </div>
    </div>
    <div id="footerMap">
      <iframe id="footerIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d334631.6632497623!2d0.854337880896347!3d49.06174431076737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e13fd4a26e28c7%3A0x30c14484fb52710!2sEure!5e0!3m2!1sfr!2sfr!4v1518787100973" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="clearfix"></div>
    <div class="footerLogos">
      <a href="https://www.normandie.fr/" target="_blank">
        <img src="{{ asset('img/logos/logo_region_normandie_286px.png') }}" alt="logo région Normandie" />
      </a>
      <a href="http://www.eure.cci.fr/" target="_blank">
        <img src="{{ asset('img/logos/logo_cci_formation_eure.jpg') }}" alt="logo de la Chambre de Commerce et d'industrie de l'Eure (CCI)" />
      </a>
      <a href="https://www.opquast.com/" target="_blank">
        <img src="{{ asset('img/logos/logo_opquast.png') }}" alt="logo Opquast" />
      </a>
      <a href="http://www.wf3.fr/" target="_blank">
        <img src="{{ asset('img/logos/logo-webforce3.png') }}" alt="logo Webforce 3" />
      </a>
      <a href="http://www.weblitzer.fr" target="_blank">
        <img src="{{ asset('img/logos/weblitzer.png') }}" alt="logo Weblitzer" />
      </a>
      <a href="https://fredericnoel.com" target="_blank">
        <img src="{{ asset('img/logos/fredericnoel.png') }}" alt="logo Frédéric Noel" />
      </a>
      <a href="https://www.pole-emploi.fr/accueil/" target="_blank">
        <img src="{{ asset('img/logos/logo_pole_emploi.png') }}" alt="logo Pôle Emploi" />
      </a>
    </div>

  </footer>
  <!-- end footer -->
