@extends('layouts/layout')

@section('content')

<section id="actualite">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="{{ asset('img/slide01.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/slide02.jpg') }}" />
      </li>
      <li>
        <img src="{{ asset('img/slide03.jpg') }}" />
      </li>
    </ul>
  </div>
  <h1 class="titre">Annu'Eure</h1>
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
      animation: "slide",
      controlNav: false
    });
  });
</script>
@endsection
