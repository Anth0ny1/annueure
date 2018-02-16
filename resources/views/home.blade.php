@extends('layouts/layout')

@section('content')

  <div class="flexslider">
    <!-- Compteur d'inscription (position absolue) -->
    <div id="compteur">
      {{ $count }}
      <p>Professionnels</p>
    </div>
    <ul class="slides">
      <li>
        <a href="{{ route('register') }}" alt="L’annuaire des professionnels du bâtiment en Normandie" title="S'inscrire à l'Annu'Eure"><img src="{{ asset('img/photo/slide01a.jpg') }}" /></a>
      </li>
      <li>
        <img src="{{ asset('img/photo/slide02a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide03a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide05a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide06a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide07a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide08a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide09a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide10a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide12a.jpg') }}" />
      </li>
    </ul>
  </div>

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

  <main id="main-services">
      <section id="services">
          <h1 style="font-family: 'pattayaregular', sans-serif; font-size:1.8rem; text-align: center; min-height: 30px; padding-top: 10px; vertical-align: middle; color: #9EA5B2;">"Bienvenue sur Annu'Eure, l'annuaire des professionnels et des artisans du bâtiment dans l'Eure en Haute Normandie."
          </h1>
        <div class="service-box">
          <div class="picto-box">
            <a href="{{ route('annuaire') }}">
              {!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h2>Annuaire des Pros.</h2>
            <p>Vous recherchez un professionnel ou un artisan près de chez vous. Utilisez le répertoire de notre annuaire !</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="{{ route('register') }}">
              {!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h2>Inscription des Pro.</h2>
            <p>Vous êtes un professionnel et vous souhaitez proposer vos services sur l'Annu'Eure ? Inscrivez-vous !</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="#">
              {!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}
            </a>
          </div>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="bloc-text">
            <h2>Prendre un rendez-vous.</h2>
            <p>Vous avez trouvé le professionnel ou l'artisan recherché et vous souhaiteriez prendre rendez-vous ? Envoyez-lui une notification !</p>
          </div>
        </div>
        <div class="service-box">
          <div class="picto-box">
            <a href="#">
              {!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
            </a>
          </div>
          <div class="bloc-text">
            <h2>Demander un devis.</h2>
            <p>Vous avez des travaux à réaliser dans votre habitation ou votre bâtiment ? Demandez un devis !</p>
          </div>
        </div>
      </section>
      <section id="actualites">
      </section>

    <aside id="flux-RSS">
      <div class="rss">
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
      </div>
    </aside>
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
</script> --}}
</div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

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
      @foreach ($users as $user)
        {{ $user->name }}
      @endforeach

      {{ $count }}

      @foreach ($categories as $categorie)
        {{ $categorie->categorie_name }}
      @endforeach

    @endsection
  </main>

@section('js')

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
