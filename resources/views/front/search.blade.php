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
      <h4> XXX sociétés figure dans votre recherche.</h4>
      <hr>
    </div>
    <div class="display">
      @foreach ($categories as $categorie)
        <div class="bloc_societe">


          <p>{{ $categorie->categorie_name }}</p>

          @foreach($categorie->society as $society)
                {{ $society->name_society }}
                {{-- {{ $count += 1 }}
                {{ $count }} --}}
          @endforeach

          <div class="logo">



          </div>
    

        </div>
      @endforeach
    </div>
  </div>
  {{-- @foreach ($categories as $categorie)
    {{ $categorie->categorie_name }}
  @endforeach --}}

@endsection
