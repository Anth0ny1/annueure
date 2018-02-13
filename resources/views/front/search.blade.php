@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/result.css') }}" />
@endsection

@section('title')
recherche société
@endsection

@section('content')
{{--
  @foreach ($users as $user)
    {{ $user->name }}
  @endforeach --}}
  <div class="content_search">
    <div class="ResultatSearch">
      <h4>{{ $count }} sociétés figure dans votre recherche.</h4>
      <hr>
    </div>
    <div class="display">
      @foreach ($quiquoi as $qq)
        <div class="bloc_societe">
          <h5>{{ $qq->name_society}}</h5>
          <p>Nom gérant : {{ $qq->gerant}}</p>
          <p>Adresse : {{ $qq->adress}}</p>
          <p>Code postal : {{ $qq->zip_code}}</p>
          <p>Ville : {{ $qq->city}}</p>
          <p>Tel : {{ $qq->phone}}</p>
          <p>Site Web : {{ $qq->site_web}}</p>
        </div>
      @endforeach
    </div>
  </div>
  {{-- @foreach ($categories as $categorie)
    {{ $categorie->categorie_name }}
  @endforeach --}}

@endsection
