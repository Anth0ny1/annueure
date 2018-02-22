@extends('layouts/appback')

@section('content')
<h1 style="color:tomato;"><strong>BackOffice </strong> Bienvenue sur le Dashboard </h1>
 <p>Nombre de sociétés : {{$sctcount}}  </p>
 <p>Nombre d'utilisateurs  : {{$usercount}}</p>
 <p>Nombre de catégories  : {{$catcount}}  </p>
@endsection
