@extends('layouts/layout')

@section('content')

<section id="actualite">
  <div class="flexslider">
    <!-- Compteur d'inscription (position absolue) -->
    <div id="compteur">
      {{ $count }}
      <p>Professionnels</p>
    </div>
    <ul class="slides">
      <li>
        <a href="{{ route('register') }}" alt="L’annuaire des professionnels du bâtiment en Normandie" title="S'inscrire à l'Annu'Eure"></a><img src="{{ asset('img/photo/slide01a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide02a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide03a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide04a.jpg') }}" />
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
        <img src="{{ asset('img/photo/slide11a.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/photo/slide12a.jpg') }}" />
      </li>
    </ul>
  </div>

  <div id="search-box">
    <div id="form-search-hp">
      {!! Form::open(['route' => 'search-action', 'method' => 'post', 'class' => 'form-horizontal']) !!}
        <div class="form-group row">

          <!-- Formulaire de recherche -->
          {!! Form::search('quiquoi', null, ['class' => 'form-control col-md-5','placeholder' => 'Métier ou nom de la société']) !!}
          {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
          {!! Form::label('quiquoi', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

          {!! Form::search('ou', null, ['class' => 'form-control col-md-4','placeholder' => 'Ville ou code postal']) !!}
          {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
          {!! Form::label('ou', '&nbsp;',['class' =>'col-md-1 control-label']) !!}

          {!! Form::submit('Trouver',['class' => 'col-md-1 btn btn-succes']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  <div class="">
    <h1 class="titre">Annu'Eure</h1>
  </div>
  <div class="services">
    <div id="annuaire-pro">
      <div class="">
        <img src="" alt="" />
      </div>
      <div class="bloc-text">
        <h2>Annuaire des Pro</h2>
        <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
      </div>
      <div class="bloc-text">
        <h4>Inscription des Pro</h4>
        <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
      </div>
      <div class="bloc-text">
        <h4>Prendre un rendez-vous</h4>
        <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
      </div>
      <div class="bloc-text">
        <h4>Demander un devis</h4>
        <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
      </div>
    </div>
  </div>
</section>
<aside id="flux-RSS">
  <div class"rss">
  </div>
  <div class"rss">
  </div>
  <div class"rss">
  </div>
</aside>

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
