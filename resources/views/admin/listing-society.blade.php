@extends('layouts/appback')

@section('content')
  <h1>listing des Sociétés</h1>
  <a href="{{ route('new-categories') }}">ajouter nouvelle société</a>
  <table>
      @foreach ($categories as $categorie)
        <tr>
          <td>{{ $categorie->categorie_name }}</td>
        </tr>
            <td>
              <a href="{{ route('update-categories',['id' => $categorie->id])}}">modifier</a>
              <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a>
            </td>
      @endforeach
  </table>
@endsection
