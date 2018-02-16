@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/annuaire.css') }}" />
@endsection

@section('title')
  Page de presentation
@endsection

@section('content')
  <div class="textePresentation">
    <h2>Annuaire des sociétés</h2>
  </div>
  <aside class="asidePresentation"> <!-- left aside  a mettre dans le header commun pour les pages-->
    <div class="pictoPresentation">               <!-- annuaire, presentation, nous contacter, nous rejoindre, login -->
      <ul>
        <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-annuaire.svg')) !!}</a></li>
        <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-inscription.svg')) !!}</a></li>
        <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-rendez-vous.svg')) !!}</a></li>
        <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-devis.svg')) !!}</a></li>
      </ul>
    </div>
  </aside>
{{-- {{dd($categories)}} --}}
<section class=" bloc_content_cat ">

  @foreach ($categories as $cat)
    <div class="btn-group">

      <div class="bloc_cat"  >
        <h6 href="#" type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$cat->categorie_name}}</h6>
          <div class="dropdown-menu">
            @foreach ($cat->society as $soc)
              <li><a class="dropdown-item" href="{{ route('annuaire-profil-societe',['id' => $soc->id])}}">{{ $soc->name_society }}</a></li>
            @endforeach
          </div>
        </div>
      </div>
    @endforeach
  </section>


  <div class="footerPresentation">


  </div>
      @endsection

      @section('js')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      @endsection
