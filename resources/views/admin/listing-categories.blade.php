@extends('layouts/appback')

@section('content')
  <h1>listing des Categories</h1>
  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>
  <table>
    @foreach ($categories as $categorie)
      <tr>
        <td>{{ $categorie->categorie_name }}</td>
      </tr>
      <td>
        <a href="{{ route('update-categories',['id' => $categorie->id])}}">modifier</a>
        {!! Form::open(['route' => ['delete-categories', $categorie->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}
        {{-- <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a> --}}
      </td>
    @endforeach
  </table>
@endsection
