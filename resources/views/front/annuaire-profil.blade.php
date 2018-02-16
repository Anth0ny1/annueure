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


  <section class="template-sct">
      <div class="presentation-profil-sct">
        <div class="textretour"><a class="texteretourAnnuaire" href="{{ route('annuaire') }}">Retour annuaire</a></div>

        @if (!empty($societies->path))
        <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $societies->path . '/' . $societies->image_name,150,150,array('crop','grayscale'))}}" alt="">
        @else
          <img class="logo-sct" src="{{ Image::url(  route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',150,150,array('crop'))}}" alt="">
        @endif
        <hr>
      <p>Nom du gérant : {{$societies->gerant}}</p>
      <hr>
      <p>Adresse : {{$societies->adress}}</p>
      <hr>
      <p>Ville : {{$societies->city}}</p>
      <hr>
      <p>Code postal : {{$societies->zip_code}}</p>
      <hr>
      <p>Téléphone : {{$societies->phone}}</p>
      <hr>
      <p>site_web : {{$societies->site_web}}</p>
      <hr>
      <p>E-mail : {{$societies->email}}</p>
      <hr>
      <p>Numéro siren : {{$societies->siren}}</p>
      <hr>
      <p>Description : <br>{{$societies->skills}}</p>
      <hr>
      <div class="textretour"><a class="texteretourAnnuaire" href="{{ route('annuaire') }}">Retour annuaire</a></div>

    </div>
  </section>
<div class="footerPresentation">
</div>


  </div>
@endsection
