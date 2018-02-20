
<!-- start footer -->
<footer id="">
  <div id="footer">

    {{-- <div class="footerPresentation1"> <!-- footer -->




      {{-- <div class="footerMap">
    </div> <!-- end footer -->
    <div class="logosCCIEure">
    <img src="img/logos/286px-Logo_Région_Normandie.png" alt="" style="height:70px;">
    <img src="img/logos/bd464ab0c6bcd31872784ab8e404292bc2868788.jpg" alt="" style="height:60px;">
    <img src="img/logos/logo_opquast.png" alt="" style="height:60px;">
    <img src="img/logos/logo-eure.png" alt="" style="height:60px;">
    <img src="img/logos/logo-webforce3.svg" alt="" style="height:60px;">
  </div>  --}}


  <?php $societies = App\Society::orderBy('created_at', 'desc')->limit(3)->get(); ?>

  {{-- <div class="blocfooter1">
    <p class="pfooter">3 dernieres sociétes inscrites : </p>
    <ul>
      <li>
        {{-- {{dd($societelimit3)}} --}}
        {{-- @foreach ($societelimit3 as $societelim) --}}
        <ul>
          @foreach ($societies as $society)
            <li><a href="">{{ $society->name_society }}</a></li>
          @endforeach
        </ul>
        {{-- @endforeach --}}
      </li>
    </ul> --}}

  {{-- </div>
  <div class="Verbar"></div>
  <div class="blocfooter1">
    <p class="pfooter">Liens utiles : </p>
    <ul>
      <li><a href="">Nous contacter</a></li>
      <li><a href="">Nous rejoindre</a></li>
      <li><a href="">Annuaire</a></li>
      <li><a href="">Mentions-legales</a></li>
    </ul>
  </div>
  <div class="Verbar"></div>
  <div class="blocfooter1">
    <p class="pfooter">remerciements : </p>
    <ul>
      <li><a href="#">webforce3</a></li>
      <li><a href="#">CCI Eure</a></li>
      <li><a href="#">Pole Emploi</a></li>
      <li><a href="#">http://www.weblitzer.fr</a></li>
      <li><a href="#">https://fredericnoel.com</a></li>
    </ul>
  </div>
  <div class="Verbar"></div>
  <div class="blocfooter1">
    <iframe class="iframefooter" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d334631.6632497623!2d0.854337880896347!3d49.06174431076737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e13fd4a26e28c7%3A0x30c14484fb52710!2sEure!5e0!3m2!1sfr!2sfr!4v1518787100973"  frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div> --}} --}}

    <!-- start footer -->
    <footer id="">
    <div id="footer">
      {{-- <ul>
      <li><a href="#">nous contacter</a></li>
      <li><a href="#">3 derniers pro inscrits</a></li>
      <li><a href="#">remerciements</a></li>
      <li><a href="#">plan du site</a></li>
    </ul> --}}
      <div class="footerPresentation1"> <!-- footer -->




                      {{-- <div class="footerMap">
                      </div> <!-- end footer -->
                      <div class="logosCCIEure">
                        <img src="img/logos/286px-Logo_Région_Normandie.png" alt="" style="height:70px;">
                        <img src="img/logos/bd464ab0c6bcd31872784ab8e404292bc2868788.jpg" alt="" style="height:60px;">
                        <img src="img/logos/logo_opquast.png" alt="" style="height:60px;">
                        <img src="img/logos/logo-eure.png" alt="" style="height:60px;">
                        <img src="img/logos/logo-webforce3.svg" alt="" style="height:60px;">
                      </div>  --}}


                      <?php $societies = App\Society::orderBy('created_at', 'desc')->limit(3)->get(); ?>

                      <div class="blocfooter1">
                        <p class="pfooter">3 dernieres sociétes inscrites : </p>
                        <ul>
                          <li>
                            {{-- {{dd($societelimit3)}} --}}
                            {{-- @foreach ($societelimit3 as $societelim) --}}
                              <ul>
                                @foreach ($societies as $society)
                                  <li><a href="{{ route('annuaire-profil-societe',['id' => $society->id])}}">{{ $society->name_society }}</a></li>
                                @endforeach
                              </ul>
                            {{-- @endforeach --}}
                          </li>
                        </ul>

                      </div>
                      <div class="Verbar"></div>
                      <div class="blocfooter1">
                        <p class="pfooter">Liens utiles : </p>
                        <ul>
                          <li><a href="{{route('nous-contacter-view')}}">Nous contacter</a></li>
                          <li><a href="{{route('register')}}">Nous rejoindre</a></li>
                          <li><a href="{{route('annuaire')}}">Annuaire</a></li>
                          <li><a href="{{route('mentions-legales')}}">Mentions-legales</a></li>
                        </ul>
                      </div>
                      <div class="Verbar"></div>
                      <div class="blocfooter1">
                        <p class="pfooter">remerciements : </p>
                        <ul>
                          <li><a href="http://www.wf3.fr/">webforce3</a></li>
                          <li><a href="http://www.eure.cci.fr/">CCI Eure</a></li>
                          <li><a href="https://www.pole-emploi.fr/accueil/">Pole Emploi</a></li>
                          <li><a href="http://www.weblitzer.fr">Quidel Antoine</a></li>
                          <li><a href="https://fredericnoel.com">Noel Frederic</a></li>
                        </ul>
                      </div>
                      <div class="Verbar"></div>
                      <div class="blocfooter1">
                        <iframe class="iframefooter" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d334631.6632497623!2d0.854337880896347!3d49.06174431076737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e13fd4a26e28c7%3A0x30c14484fb52710!2sEure!5e0!3m2!1sfr!2sfr!4v1518787100973"  frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                    </div>








</footer> <!-- end footer -->

    </footer> <!-- end footer -->




<!-- start Javascript -->
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
<!-- end Javascript -->
