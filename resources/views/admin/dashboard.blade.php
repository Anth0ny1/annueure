@extends('layouts/appback')

@section('content')

<h1 style="color:tomato; text-align:center;"><strong>Bienvenue sur le Dashboard</strong></h1><h4 style="color:#2A3F54;">Cette page à pour fonction pour l'administrateur du site
de modérer, modifier, effacer le contenue des catégories, sociétés et utilisateurs du site Annu'Eure.</h4><br />
 <h3 style="color:tomato; text-align:left;">Sociétés : {{$sctcount}}</h3>
 <h3 style="color:tomato; text-align:left;">Utilisateurs : {{$usercount}}</h3>
 <h3 style="color:tomato; text-align:left;">Catégories : {{$catcount}}</h3>

@endsection
