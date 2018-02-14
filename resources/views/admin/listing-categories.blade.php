@extends('layouts/appback')

@section('content')
  <h1>listing des Categories</h1>

  <table>

  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom de la catégorie</th>
        <th>Modification</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
        <tr>
          <td>{{ $categorie->id }}</td>
          <td>{{ $categorie->categorie_name }}</td>
          <td><a href="{{ route('update-categories',['id' => $categorie->id])}}">modifier</a></td>
          <td>
            {!! Form::open(['route' => ['delete-categories', $categorie->id], 'method' => 'delete']) !!}
              {!! Form::submit('Delete') !!}
            {!! Form::close() !!}</td>
            {{-- <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a> --}}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

    {{ $categories->links() }}
@endsection
