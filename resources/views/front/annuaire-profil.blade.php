@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" />
@endsection

@section('title')
  Profil société
@endsection

@section('content')
  {{-- {{dd($societies)}} --}}
  <div class="textePresentation">
    <h1 id="titlePageInt">{{$societies->name_society}}</h1>
  </div>
<div class="template-sct">
      <section>
        <div class="presentation-profil-sct">
            <div class="textretour"><a class="texteretourAnnuaire" href="{{ route('annuaire') }}">Retour annuaire</a></div>
            @if (!empty($societies->path))
            <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $societies->path . '/' . $societies->image_name,90,90,array('crop','grayscale'))}}" alt="">
            @else
              <img class="logo-sct" src="{{ Image::url(  route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',90,90,array('crop'))}}" alt="">
            @endif

            <div class="badgeSte">
              @foreach ($categories as $cat)
                <a href="{{ route('listing-by-categorie',['categorieName' => $cat->categorie_name])}}" class="badge badge-primary">{{$cat->categorie_name}}</a>
              @endforeach
            </div>
          <p class="p"><i class="fas fa-user"></i> : {{$societies->gerant}}</p>
          <hr class="hrclass">
          <p class="p"><i class="fas fa-address-card"></i> : {{$societies->adress}} - {{$societies->zip_code}} {{$societies->city}}</p>
          <hr class="hrclass">

          <p class="p"><i class="fas fa-phone-square"></i> : {{$societies->phone}}</p>
          <hr>
          <p class="p"><i class="fas fa-globe"></i> : <a href="{{$societies->site_web}}">{{$societies->site_web}}</a></p>
          <hr>
          <p class="p"><i class="fas fa-envelope"></i> : {{$societies->email}}</p>
          <hr>
          <p class="p">Siren : {{$societies->siren}}</p>
          <hr>
          <p class="p">Description : <br>{{$societies->skills}}</p>
          <hr>
          <div class="textretour"><a class="texteretourAnnuaire" href="{{ route('annuaire') }}">Retour annuaire</a></div>
        </div>
        <div class="iframeMaps">
          <iframe frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?q={{$societies->adress}}.''.{{$societies->city}}&key=AIzaSyABt92V3M0BfIPmUVUxWgfhTNpnckwDp_c" allowfullscreen></iframe>
        </div>
    </section>
  </div>
  <div class="clear"></div>
@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
  <script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "fade",
      animationLoop: true,
      controlNav: false,
      directionNav: false,
    });
  });
  </script>
@endsection

{{--
api key google maps javascript :
AIzaSyABt92V3M0BfIPmUVUxWgfhTNpnckwDp_c --}}
