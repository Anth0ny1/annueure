<<<<<<< HEAD
@extends('layouts/layout')
=======
@extends('front/layout')

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
>>>>>>> a524aaf418d4676f652467327e5620a7e147b27f
