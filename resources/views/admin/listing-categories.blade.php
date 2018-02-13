@extends('layouts/appback')

@section('content')
  <h1>listing des Categories</h1>
<<<<<<< HEAD
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
=======

  <a class="btn btn-info" href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom de la catégorie</th>
        <th>Modification</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
        <tr>
          <td>{{ $categorie->id }}</td>
          <td>{{ $categorie->categorie_name }}</td>
          <td><a href="{{ route('update-categories',['id' => $categorie->id])}}">modifier</a></td>
          <td>{!! Form::open(['route' => ['delete-categories', $categorie->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete') !!}
            {!! Form::close() !!}</td>
            {{-- <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a> --}}
          </td>
        </tr>
      @endforeach
    </tbody>
>>>>>>> 16052d025970fb163d9ed6660a8920184958c92b
  </table>
@endsection
