@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/result.css') }}" />
@endsection

@section('title')
recherche société
@endsection

@section('content')
  <div class="textePresentation">
    {{-- {{ dd($societies)}} --}}
    <h2>Liste des Societés</h2>

  </div>
  <div class="content_search">
    <div class="ResultatSearch">
      {{-- <h4> {{$societies}} sociétés figure dans votre recherche.</h4> --}}
      <hr>
    </div>
    <div class="display">

      @foreach ($societies as $qq)
        {{-- {{dd($qq)}} --}}
        <div class="bloc_societe">
          <div class="logo">
          @if (!empty($qq->path))
          <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $qq->path . '/' . $qq->image_name,100,100,array('crop','grayscale'))}}" alt="">
          @else
            <img class="logo-sct" src="{{ Image::url(  route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',100,100,array('crop'))}}" alt="">
          @endif
        </div>
          <h5>{{ $qq->name_society}}</h5>
          {{-- <p class="p"><i class="fas fa-user"></i> : {{ $qq->categorie_name}}</p> --}}
          <p class="p"><i class="fas fa-user"></i> : {{ $qq->gerant}}</p>
          {{-- <p class="p"><i class="fas fa-address-card"></i> : {{ $qq->adress}}</p> --}}
          {{-- <p class="p"><i class="fas fa-map-signs"></i> : {{ $qq->zip_code}}</p> --}}
          <p class="p"><i class="fas fa-map-marker-alt"></i> : {{ $qq->city}}</p>
          <p class="p"><i class="fas fa-phone-square"></i> : {{ $qq->phone}}</p>
          <p class="p"><i class="fas fa-globe"></i> : <a href="{{$qq->site_web}}">{{$qq->site_web}}</a></p>
          <p class="p"><i class="fas fa-envelope"></i> : {{$qq->email}}</p>
          {{-- <p class="p">Siren : {{$qq->siren}}</p> --}}
          <a class="btn btn-success" href="{{ route('annuaire-profil-societe',['id' => $qq->id])}}">Voir la fiche</a>
        </div>
      @endforeach
    </div>
  </div>
  {{-- @foreach ($categories as $categorie)
    {{ $categorie->categorie_name }}
  @endforeach --}}

@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

@endsection
