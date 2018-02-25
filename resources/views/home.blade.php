
@extends('layouts/layout')

@section('content')

<!-- FLEXSLIDER -->

  <div class="flexslider">
    <!-- Compteur d'inscription (position absolue) -->
    <div id="compteur">
      {{ $count }}
      <p>Professionnels</p>
    </div>
    <ul class="slides">

      @if (!empty(Auth::user()))
      <li>
        <img src="{{ asset('img/photo/slide01.jpg') }}" alt="L’annuaire des professionnels du bâtiment en Normandie est une idée originale des étudiants de Webforce 3 avec la CCI de l'Eure" />
      </li>
      @else
      <li>
        <a href="{{ route('register') }}" title="S'inscrire à l'Annu'Eure. Rejoignez-nous !"><img src="{{ asset('img/photo/slide01a.jpg') }}" alt="L’annuaire des professionnels du bâtiment en Normandie est une idée originale des étudiants de Webforce 3 avec la CCI de l'Eure" /></a>
      </li>
      @endif

      <li>
        <img src="{{ asset('img/photo/slide02a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide03a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide05a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide06a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide07a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide08a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide09a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide10a.jpg') }}" alt="" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide12a.jpg') }}" alt="" />
      </li>
    </ul>
  </div>

<!-- FORMULAIRE DE RECHERCHE DES PROFESIONNELS -->

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

  <?php
  $arrayCat = [];
    foreach ($selectCategories as $cat)
    {
        $arrayCat[$cat->id] = $cat->categorie_name;
    }
  // dd($selectZip);
  $arrayZip = [];
    foreach ($selectZip as $zip)
    {
      // echo $zip->zip_code;
      // echo '<br>';
        $arrayZip[$zip->zip_code] = $zip->zip_code;
      // dd($arrayZip);
    }
  ?>
  <div id="search-box">
    <div id="form-search-hp">
      {!! Form::open(['route' => 'search-action', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="form-group row">

        <!-- Formulaire de recherche -->
        {!! Form::select('categorie_name',$arrayCat,'',['class' => 'form-control col-md-5','placeholder' => 'Choisissez votre métier']) !!}
        {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}
        {!! Form::label('categorie_name', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

        {!! Form::select('zip', $arrayZip,'',['class' => 'form-control col-md-4','placeholder' => 'Ville ou code postal']) !!}
        {!! $errors->first('zip', '<small class="help-block">:message</small>') !!}
        {!! Form::label('zip', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

        {!! Form::submit('Go',['class' => 'col-md-1 btn btn-succes']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>

<!-- SERVICES AUX PROFESSIONNELS -->

  <main id="main-services">
    <section id="services">

    <!-- Affichage des erreurs du formulaire -->
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <!-- Fin affichage des erreurs du formulaire -->

      <h1 id="baseline">
          “ Bienvenue sur Annu'Eure, l'annuaire des professionnels et des artisans du bâtiment dans l'Eure en Haute Normandie. ”
      </h1>
      <div id="first-service-box" class="service-box ">
        <div class="picto-box">
          <a href="{{ route('annuaire') }}">
            {!! file_get_contents(asset('img/picto/picto-annuaire.svg')) !!}
          </a>
        </div>
        <div class="ServiceBoxText">
          <h3 class="TxtPicto">Annuaire des Pro</h3>
          <p class="TxtPicto">Vous recherchez un professionnel ou un artisan près de chez vous. Utilisez le répertoire de notre annuaire en cliquant sur l'icône ci-dessus&nbsp;!</p>
          <button type="button" class="btn btn-light BtnPicto" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vous recherchez un professionnel ou un artisan près de chez vous. Utilisez le répertoire de notre annuaire&nbsp;!">
            <h3>Annuaire des Pro</h3>
        </div>
      </div>
      <div class="service-box">
        <div class="picto-box">
          <a href="{{ route('register') }}">
            {!! file_get_contents(asset('img/picto/picto-inscription.svg')) !!}
          </a>
        </div>
        <div class="ServiceBoxText">
          <h3 class="TxtPicto">Inscription des Pro</h3>
          <p class="TxtPicto">Vous êtes un professionnel et vous souhaitez proposer vos services sur l'Annu'Eure&nbsp;? Inscrivez-vous en cliquant sur l'icône ci-dessus&nbsp;!</p>
          <button type="button" class="btn btn-light BtnPicto" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vous êtes un professionnel et vous souhaitez proposer vos services sur l'Annu'Eure&nbsp;? Inscrivez-vous&nbsp;!">
            <h3>Inscription des Pro</h3>
          </button>
        </div>
      </div>
      <div class="service-box">
        <div class="picto-box">
          <a href="{{ route('nous-contacter-view') }}">
            {!! file_get_contents(asset('img/picto/picto-rendez-vous.svg')) !!}
          </a>
        </div>
        <div class="ServiceBoxText">
          <h3 class="TxtPicto">Prendre un rendez-vous</h3>
          <p class="TxtPicto">Vous avez trouvé le professionnel ou l'artisan recherché et vous souhaiteriez un rendez-vous&nbsp;? Envoyez-lui une notification&nbsp;!</p>
          <button type="button" class="btn btn-light BtnPicto" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vous avez trouvé le professionnel ou l'artisan recherché et vous souhaiteriez un rendez-vous&nbsp;? Envoyez-lui une notification en cliquant sur l'icône ci-dessus&nbsp;!">
            <h3>Prendre un RV</h3>
          </button>
        </div>
      </div>
      <div class="service-box">
        <div class="picto-box">
          <a href="{{ route('nous-contacter-view') }}">
            {!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
          </a>
        </div>
        <div class="ServiceBoxText">
          <h3 class="TxtPicto">Demander un devis</h3>
          <p class="TxtPicto">Vous avez des travaux à réaliser dans votre habitation ou votre bâtiment&nbsp;? Demandez un devis&nbsp;!</p>
          <button type="button" class="btn btn-light BtnPicto" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vous avez des travaux à réaliser dans votre habitation ou votre bâtiment&nbsp;? Demandez un devis en cliquant sur l'icône ci-dessus&nbsp;!">
            <h3>Demander un devis</h3>
        </div>
      </div>
    </section>

      <section id="actualites">
        <!-- separateur de section -->
        <div class="separator"></div>
        <h2 id="titleHP">
            Focus : les métiers du bâtiment
        </h2>
        <div class="first-actu-box">

        @foreach ( $selectCategories1 as $categorie)
          <div class="ActuBox">
            <div class="ActuBoxImg">
              <a href="{{ route('listing-by-categorie',['categorieName' => $categorie->categorie_name])}}">
                <img src="{{ Image::url( route ('home') . '/' . $categorie->path_categorie . '/' . $categorie->original_name,330,229,array('crop'))}}" alt="" />
              </a>
            </div>
            <div class="ActuBoxText">
              <h3>{{ $categorie->categorie_name}}</h3>
              <p>{{ $categorie->description}}</p>
            </div>
          </div>
        @endforeach

        </div>
      </section>
  </main>

<!-- SIDEBAR A DROITE : FLUX RSS -->

<aside id="flux-RSS">
  <div class="rss">

    <?php

    /******** Flux RSS N° 1 - Actualités Batiweb *********/
  	try {

  		if(!@$fluxrss=simplexml_load_file('http://www.batiweb.com/rss.html')) {
  			throw new Exception('Flux introuvable');
  		}
  		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
  			throw new Exception('Flux invalide');

  		echo '<h3 class="h3_rss">'.(string)$fluxrss->channel->title.'</h3>
  				<p class="p_rss">'.(string)$fluxrss->channel->description.'</p>';

  		$i = 0;
  		$nb_affichage = 5;
  		echo '<ul>';
  		foreach($fluxrss->channel->item as $item) {
  			echo '<li><span>'.date('d/m',strtotime($item->pubDate)).' : <a href="'.(string)$item->link.'" target="_blank">'.(string)$item->title.'</a> </li>';
  			if(++$i>=$nb_affichage)
  				break;
  		}
  		echo '</ul>';
  	}
  	catch(Exception $e) {
  		echo $e->getMessage();
  	}
    /******** Flux RSS N° 2 - Actualité Le Moniteur *********/
    try {

      if(!@$fluxrss2=simplexml_load_file('https://www.lemoniteur.fr/cache/X_articles_rss2_119.xml')){
        throw new Exception('Flux introuvable');
      }
      if(empty($fluxrss2->channel->title) || empty($fluxrss2->channel->description) || empty($fluxrss2->channel->item->title))
        throw new Exception('Flux invalide');

      echo '<h3 class="h3_rss">'.(string)$fluxrss2->channel->title.'</h3>
          <p class="p_rss">'.(string)$fluxrss2->channel->description.'</p>';

      $i = 0;
      $nb_affichage = 5;
      echo '<ul>';
      foreach($fluxrss2->channel->item as $item) {
        echo '<li><span>'.date('d/m',strtotime($item->pubDate)).' : <a href="'.(string)$item->link.'" target="_blank">'.(string)$item->title.'</a> </li>';
        if(++$i>=$nb_affichage)
          break;
      }
      echo '</ul>';
    }
    catch(Exception $e) {
      echo $e->getMessage();
    }

    /******** Flux RSS N° 3 - Offre d'emplois *********/
    try{

      if(!@$fluxrss3=simplexml_load_file('https://www.loffredemploi.fr/offre-emploi/haute-normandie/construction-btp-batiment/eure/0/1000/fluxrss.xml')){
        throw new Exception('Flux introuvable');
      }
      if(empty($fluxrss3->channel->title) || empty($fluxrss3->channel->description) || empty($fluxrss3->channel->item->title))
        throw new Exception('Flux invalide');

      echo '<h3 class="h3_rss">'.(string)$fluxrss3->channel->title.'</h3>
          <p class="p_rss">'.(string)$fluxrss3->channel->description.'</p>';

      $i = 0;
      $nb_affichage = 5;
      echo '<ul>';
      foreach($fluxrss3->channel->item as $item) {
        echo '<li><span>'.date('d/m',strtotime($item->pubDate)).' : <a href="'.(string)$item->link.'" target="_blank">'.(string)$item->title.'</a> </li>';
        if(++$i>=$nb_affichage)
          break;
      }
      echo '</ul>';
    }
    catch(Exception $e) {
      echo $e->getMessage();
    }

  ?>

</div> <!-- Fin des flux RSS -->
</aside> <!-- Fin de la Sidebar droite -->

<!-- CONTENEUR AJAX JS -->

{{-- <a href="# "id="btnafficheuser">Get users</a>
<div id="afficheruser">
<script type="text/javascript">
  $('#btnafficheuser').on('click', function(e){
    e.preventDefault();
    $.ajax({
      type: 'GET',
      url: "{{ route('ajax_user_get_all')}}",
      beforeSend: function(){

      },
      success: function(responses){
        $('#btnafficheuser').html(response.v);
      }
    });
  });
</script>
</div> --}}

    {{--
      Affichage de 3 categories
      Nombre de pro inscrit
      3 Derniers pro inscrit
    --}}

    {{-- {{ dd($users)}} --}}
      {{-- @foreach ($users as $user)
        {{ $user->name }}
      @endforeach

      {{ $count }} --}}

      {{-- @foreach ($categories as $categorie)
        {{ $categorie->categorie_name }}
      @endforeach --}}
{{-- {{dd($selectCategories)}} --}}

@endsection

<!-- CONTENEUR & FONCTIONS JS -->
@section('js')

<!-- FLEXSLIDER JS -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

<script type="text/javascript" charset="utf-8">
  // Can also be used with $(document).ready()
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "fade",
      controlNav: false,
      prevText:	"",
      nextText:	"",
    });
  });
</script> <!-- FIN FLEXSLIDER JS -->

<!-- ACTIVATION DES TOOLTIPS POPOVER JS -->
<script type="text/javascript" charset="utf-8">
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
</script>

<script type="text/javascript">
  $('#btnAfficheUser').on('click', function(e){

    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: "{{ route('nous-contacter') }}",
      // data: '_token',
      beforeSend: function(){
          console.log('beforeSend');
      },
      success:function(response){
          console.log('Success');
        $('#afficherUser').html(response.v);
      }
    });

    // console.log('michel');
  });
</script>
@endsection
