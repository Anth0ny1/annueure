@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" />
@endsection

@section('title')
  Profil société.
@endsection

@section('content')


  <section class="template-sct">
    <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $societies->path . '/' . $societies->image_name,150,150,array('crop','grayscale'))}}" alt="">
      <div class="presentation-profil-sct">
      <h5>{{$societies->name_society}}</h5>
      <p>Nom du gérant : {{$societies->gerant}}</p>
      <p>Adresse : {{$societies->adress}}</p>
      <p>Ville : {{$societies->city}}</p>
      <p>Code postal : {{$societies->zip_code}}</p>
      <p>Téléphone : {{$societies->phone}}</p>
      <p><a href="{{$societies->site_web}}">site_web</a></p>
      <p>E-mail : {{$societies->email}}</p>
      <p>Numéro siren : {{$societies->siren}}</p>
      <p>Description : <br>{{$societies->skills}}</p>
    </div>
  </section>


<div class="footerPresentation">
</div>


  </div>
@endsection
