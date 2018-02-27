@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/result.css') }}" />
@endsection

@section('title')
  Listing par catégorie
@endsection

@section('content')

<!-- Container principal -->
<main id="mainContainerPage">

  <!-- Sidebar left (gauche) -->
  @include('layouts.front.sidebarLeft')

  <!-- section principale (droite) -->
  <div class="mainContentRight">

    <h1 id="titlePageInt">
      Les sociétés dans la catégorie choisie
    </h1>

    <section class="SectionFichesSte">
      {{-- {{dd($categorie)}} --}}

        @foreach ($categorie as $qq)
          <div class="fichePresentSte paddingbottom">
            <div class="logo">
            @if (!empty($qq->path))

              <img class="logo-sct" src="{{ Image::url( route ('home') . '/' . $qq->path . '/' . $qq->image_name,100,100,array('crop','grayscale'))}}" alt="">
            @else
              <img class="logo-sct" src="{{ Image::url( route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',100,100,array('crop'))}}" alt="">
            @endif
            </div>
            <h5>
              {{ $qq->name_society}}
            </h5>
            <h6 class="h6profil">{{ $qq->categorie_name}}</h6>
            <p class="p"><i class="fas fa-user"></i> : {{ $qq->gerant}}</p>
            <p class="p"><i class="fas fa-map-marker-alt"></i> : {{ $qq->city}}</p>
            <p class="p"><i class="fas fa-phone-square"></i> : {{ $qq->phone}}</p>
            <p class="p"><i class="fas fa-globe"></i> : <a href="{{$qq->site_web}}">{{$qq->site_web}}</a></p>
            <p class="p"><i class="fas fa-envelope"></i> : {{$qq->email}}</p>
            <a class="btn btn-success" href="{{ route('annuaire-profil-societe',['id' => $qq->id])}}">
              Voir la fiche
            </a>
          </div>
        @endforeach
    </section>
  </div>
</main>
@endsection

@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

@endsection
