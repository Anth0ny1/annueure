@extends('layouts/layout')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/annuaire.css') }}" /> -->
@endsection

@section('title')
  Annuaire des sociétés
@endsection

@section('content')
  <main id="mainContainerPage">

  <!-- Sidebar left (gauche) -->
  @include('layouts.front.sidebarLeft')

    <!-- Annuaire des entreprises par catégories de métier -->
    <section class="mainContentRight">
      <h1 id="titlePageInt">Annuaire des sociétés</h1>
      <h5 class="PgAnnu">{{$categoriescount}} catégories figurent dans notre annuaire</h5>

      <!-- Flexbox : listes des entreprises par catégorie -->
      <div class="FlexBoxPgAnnu">
            @foreach ($categories as $cat)
            <div class="PgAnnuBlocCat">
                    <img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"src="{{ Image::url(  route ('home') . '/' . $cat->path_categorie . '/' . $cat->original_name,190,100,array())}}" alt="" />
                    <h6 href="#" type="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{$cat->categorie_name}}</h6>
                <div class="dropdown-menu">
                    {{-- {{dd($cat->society)}} --}}
                    @foreach ($cat->society as $soc)
                    <li><a class="dropdown-item" href="{{ route('annuaire-profil-societe',['id' => $soc->id])}}">{{ $soc->name_society }}</a></li>
                    @endforeach
                </div>
            </div>
            @endforeach
      </div>
    </section>

    <div class="clearfix"></div><!-- Séparation et remise à zéro du float -->

  </main>
@endsection
