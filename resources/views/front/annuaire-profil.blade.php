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
@section('js')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
