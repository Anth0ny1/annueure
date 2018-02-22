@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/annuaire.css') }}" />
@endsection

@section('title')
  Annuaire des sociétés
@endsection

@section('content')
  <main id="mainContainerPage">

  {{-- <div class="textePresentation">
    <h1 id="titlePageInt">Annuaire des sociétés</h1>

  </div> --}}
{{-- <div class="div_annuaire"> --}}
  <aside class="sidebarLeft"> <!-- left aside  a mettre dans le header commun pour les pages-->
    <div class="pictoSidebarLeft picto-box">               <!-- annuaire, presentation, nous contacter, nous rejoindre, login -->
      <ul>
        <li>
          <a href="{{ route('annuaire') }}">{!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}</a>
          <p class="labelPicto">Annuaire des Pro</p>
        </li>
        <li>
          <a href="{{ route('register') }}">{!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}</a>
          <p class="labelPicto">Inscription des Pro</p>
        </li>
        <li>
          <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}</a>
          <p class="labelPicto">Prendre un rendez-vous</p>
        </li>
        <li>
          <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}</a>
          <p class="labelPicto">Demander un devis</p>
        </li>
      </ul>
    </div>
  </aside>
{{-- {{dd($categories)}} --}}


  {{-- <hr> --}}


  <section class="mainContentRight">
    <h1 id="titlePageInt">Annuaire des sociétés</h1>
    <h5 class="annuaireCountCategorie">{{$categoriescount}} catégories figure dans notre annuaire</h5>

    {{-- <section class=" bloc_content_cat "> --}}
          @foreach ($categories as $cat)
                <div class="bloc_cat"  >
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
      {{-- </div> --}}

  </section>
{{-- </div> --}}
<div class="clearfix"></div>
</main>
      @endsection

      @section('js')
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

{{-- <script type="text/javascript">

for (var i = 0; i < test; i++) {
  $('.dropdown-toggle-' + i).dropdown()
}
</script> --}}


{{-- </script> --}}

      @endsection
