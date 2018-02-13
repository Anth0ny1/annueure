@extends('layouts/layout')


@section('content')
{{--
  @foreach ($users as $user)
    {{ $user->name }}
  @endforeach --}}
<div class="ResultatSearch">
   <h4>{{ $count }} sociétés figure dans votre recherche.</h4>
   <hr>
</div>


  {{-- @foreach ($categories as $categorie)
    {{ $categorie->categorie_name }}
  @endforeach --}}

@endsection
