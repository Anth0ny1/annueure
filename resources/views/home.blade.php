@extends('layouts/layout')

@section('content')
  <?php

  ?>
<?php
  // require_once(asset('rss/magpiemod/rss_fetch.inc'));
?>

<!-- FLEXSLIDER -->

  <div class="flexslider">
    <!-- Compteur d'inscription (position absolue) -->
    <div id="compteur">
      {{ $count }}
      <p>Professionnels</p>
    </div>
    <ul class="slides">
      <li>
        <a href="{{ route('register') }}" alt="L’annuaire des professionnels du bâtiment en Normandie est une idée originale des étudiants de Webforce 3 avec la CCI de l'Eure" title="S'inscrire à l'Annu'Eure. Rejoignez-nous !"><img src="{{ asset('img/photo/slide01a.jpg') }}" /></a>
      </li>
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
          {!! Form::select('categorie_name',$arrayCat,'',['class' => 'form-control col-md-5','placeholder' => 'Choisisez votre métier']) !!}
          {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}
          {!! Form::label('categorie_name', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

          {!! Form::select('zip', $arrayZip,'',['class' => 'form-control col-md-4','placeholder' => 'Ville ou code postal']) !!}
          {!! $errors->first('zip', '<small class="help-block">:message</small>') !!}
          {!! Form::label('zip', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

          {!! Form::submit('Trouver',['class' => 'col-md-1 btn btn-succes']) !!}
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

        <h1 style="font-family: 'pattayaregular', sans-serif; font-size:1.8rem; text-align: center; min-height: 30px; padding: 20px 5px; vertical-align: middle; color: #9EA5B2;">
            “ Bienvenue sur Annu'Eure, l'annuaire des professionnels et des artisans du bâtiment dans l'Eure en Haute Normandie. ”
        </h1>
        <div id="first-service-box" class="service-box ">
          <div class="picto-box">
            <a href="{{ route('annuaire') }}">
              {!! file_get_contents(asset('img/picto/picto-annuaire.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h3>Annuaire des Pro</h3>
            <p>Vous recherchez un professionnel ou un artisan près de chez vous. Utilisez le répertoire de notre annuaire&nbsp;!</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="{{ route('register') }}">
              {!! file_get_contents(asset('img/picto/picto-inscription.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h3>Inscription des Pro</h3>
            <p>Vous êtes un professionnel et vous souhaitez proposer vos services sur l'Annu'Eure&nbsp;? Inscrivez-vous&nbsp;!</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="#">
              {!! file_get_contents(asset('img/picto/picto-rendez-vous.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h3>Prendre un rendez-vous</h3>
            <p>Vous avez trouvé le professionnel ou l'artisan recherché et vous souhaiteriez un rendez-vous&nbsp;? Envoyez-lui une notification&nbsp;!</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="#">
              {!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h3>Demander un devis</h3>
            <p>Vous avez des travaux à réaliser dans votre habitation ou votre bâtiment&nbsp;? Demandez un devis&nbsp;!</p>
          </div>
        </div>
      </section>

      <section id="actualites">
        <h2 class="separation">
            Focus : les métiers du jour
        </h2>

<div class="first-actu-box">
        @foreach ( $selectCategories1 as $categorie)
            
          {{-- {{dd($categorie)}} --}}
          <div class="actu-box">
            <div class="img-actu-box">
              {{-- <img src="{{ Image::url(  route ('home') . '/' . $categorie->path . '/' . $categorie->original_name,295,209,array('crop'))}}" alt="" /> --}}
              <img src="{{ Image::url(  route ('home') . '/' . $categorie->path . '/' . $categorie->original_name,330,229,array('crop'))}}" alt="" />
            </div>
            <div class="bloc-text">
              <h3>{{ $categorie->categorie_name}}</h3>
              <p>{{ $categorie->description}}</p>
            </div>
          </div>
        @endforeach
</div>

        {{-- <div id="first-actu-box" class="actu-box">
          <div class="img-actu-box">
            <a href="{{ route('register') }}">

              <img src="{{ asset('img/photo/metiers-du-jour-01.jpg') }}" alt="" />
            </a>

          </div>

            <h3>Paysagistes et jardiniers</h3>
            <p>Découvrir le métier de jardinier / paysagiste dans l'Eure. <a href="#">Lire la suite</a></p>
          </div>
        </div>
        <div class="actu-box">
          <div class="img-actu-box">
            <a href="{{ route('register') }}">
              <img src="{{ asset('img/photo/metiers-du-jour-02.jpg') }}" alt="" />
            </a>
          </div>
          <div class="bloc-text">
            <h3>Menuisiers et décorateurs</h3>
            <p>Découvrir le métier de Menuisiers / décorateurs dans l'Eure. <a href="#">Lire la suite</a></p>
          </div>
        </div>
        <div class="actu-box" id="last-actu-box">
          <div class="img-actu-box">
            <a href="{{ route('register') }}">
              <img src="{{ asset('img/photo/metiers-du-jour-03.jpg') }}" alt="" />
            </a>
          </div>
          <div class="bloc-text">
            <h3>Conducteurs de travaux BTP</h3>
            <p>Découvrir le métier de conducteurs de travaux pour le BTP dans l'Eure. <a href="#">Lire la suite</a></p>
          </div>
        </div> --}}
      </section>
  </main>

<!-- SIDEBAR A DROITE - FLUX RSS -->

<aside id="flux-RSS">
  <div class="rss">

    <?php

  	try{

  		if(!@$fluxrss=simplexml_load_file('http://www.batiweb.com/rss.html')){
  			throw new Exception('Flux introuvable');
  		}
  		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
  			throw new Exception('Flux invalide');

  		echo '<h3 class="h3_rss">'.(string)$fluxrss->channel->title.'</h3>
  				<p class="p_rss">'.(string)$fluxrss->channel->description.'</p>';

  		$i = 0;
  		$nb_affichage = 15;
  		echo '<ul>';
  		foreach($fluxrss->channel->item as $item){
  			echo '<li><span>'.date('d/m',strtotime($item->pubDate)).' : <a href="'.(string)$item->link.'" target="_blank">'.(string)$item->title.'</a> </li>';
  			if(++$i>=$nb_affichage)
  				break;
  		}
  		echo '</ul>';
  	}
  	catch(Exception $e){
  		echo $e->getMessage();
  	}

  ?>

  <img class="logopub"src="{!! asset('img/logos/image.png') !!}" width="250px;" alt="">
  </div>
  <span></span>
        {{-- <div class="rss">
          <h3>Titre du flux RSS</h3>
          <p>
            Ici un flux RSS sur les annonces d'emplois (à trouver sur Internet).
          </p>
        </div>
        <div class="rss">
          <h3>Titre du flux RSS</h3>
          <p>
            Ici un autre flux RSS sur les formations professionnelles (à trouver sur Internet).
          </p>
        </div>
        <div class="rss">
          <h3>Titre du flux RSS</h3>
          <p>
            Ici un autre flux RSS sur les actualités du BTP en général (à trouver sur Internet).
          </p>
        </div> --}}
</aside>

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

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      Dashboard
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
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

@section('js')

<!-- CONTENEUR & FONCTIONS JS -->

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
</script>

@endsection
