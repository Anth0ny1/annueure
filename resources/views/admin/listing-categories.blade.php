@extends('layouts/appback')

@section('content')
  <h1>listing des Categories</h1>
<<<<<<< HEAD

  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>
  <table>


=======
 
  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>
>>>>>>> aa14b0066ff6566736a1bbc72b53c5d11fa75bd2


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
          <td>{!! Form::open(['route' => ['delete-categories', $categorie->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete') !!}
            {!! Form::close() !!}</td>
            {{-- <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a> --}}
          </td>
        </tr>
      @endforeach
    </tbody>
<<<<<<< HEAD

=======
>>>>>>> aa14b0066ff6566736a1bbc72b53c5d11fa75bd2
  </table>
@endsection
