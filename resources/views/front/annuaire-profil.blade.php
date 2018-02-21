@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" />
@endsection

@section('title')
  Profil société
@endsection

@section('content')
  <div class="textePresentation">
<h2>{{$societies->name_society}}</h2>

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
      <p class="p"><i class="fas fa-user"></i> : {{$societies->gerant}}</p>
      <hr class="hrclass">
      <p class="p"><i class="fas fa-address-card"></i> : {{$societies->adress}}</p>
      <hr class="hrclass">
      <p class="p"><i class="fas fa-map-marker-alt"></i> : {{$societies->city}}</p>
      <hr class="hrclass">
      <p class="p"><i class="fas fa-map-signs"></i> : {{$societies->zip_code}}</p>
      <hr>
      <p class="p"><i class="fas fa-phone-square"></i> : {{$societies->phone}}</p>
      <hr>
      <p class="p"><i class="fas fa-globe"></i> : {{$societies->site_web}}</p>
      <hr>
      <p class="p"><i class="fas fa-envelope"></i> : {{$societies->email}}</p>
      <hr>
      <p class="p">Siren : {{$societies->siren}}</p>
      <hr>
      <p class="p"><i class="fas fa-edit"></i>Description : <br>{{$societies->skills}}</p>
      <hr>
      <div class="textretour"><a class="texteretourAnnuaire" href="{{ route('annuaire') }}">Retour annuaire</a></div>
    </div>

  </section>



    <img class="img_annuaire_pub" src="{{ asset('img/logos/pub_ici.jpg') }}" alt=""  />



  </div>
@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  {{-- <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script> --}}
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
{{-- <iframe width="600" height="450" frameborder="0" style="border:0" --}}
{{-- src="https://www.google.com/maps/embed/v1/place?q={{$societies->zip_code}}+{{$societies->city}}+france:ChIJNSMCIJQk4UcRkJ27T0gUDAQ&key=AIzaSyABt92V3M0BfIPmUVUxWgfhTNpnckwDp_c" allowfullscreen></iframe> --}}
{{-- {{dd($societies->zip_code)}} --}}
<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q={{$societies->adress}}.''.{{$societies->city}}&key=AIzaSyABt92V3M0BfIPmUVUxWgfhTNpnckwDp_c" allowfullscreen></iframe>




{{-- AIzaSyABt92V3M0BfIPmUVUxWgfhTNpnckwDp_c --}}



{{--
api key google maps javascript :
AIzaSyBIwOEI8lL_e6O9r5VopMIeC2P2eLuArc8 --}}
