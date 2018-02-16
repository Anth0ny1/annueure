@extends('layouts/layout')

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" /> --}}
@endsection

@section('title')
  Profil société
@endsection

@section('content')
  <div class="textePresentation">  <!-- texte banniére verte de présentation -->
    <h2>Liste des sociétés </h2>
  </div>
  <div>  <!-- container -->
    <aside class="asidePresentation"> <!-- left aside -->
      <div class="pictoPresentation">
        <ul>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-annuaire.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-inscription.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-rendez-vous.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-devis.svg')) !!}</a></li>
        </ul>
      </div>
    </aside> <!-- end left aside -->
@endsection
