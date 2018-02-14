@extends('layouts/appback')

@section('content')

  <h1>listing des Utilisateurs</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Email</th>
        <th>Role</th>
        <th>Créé le</th>
        <th>Modifié le</th>
        <th>Modifier l'utilisateur</th>
        <th>Effacer</th>
      </tr>
    </thead>
    @foreach ($users as $user)
      <tbody>
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->lastname }}</td>
          <td>{{ $user->city }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
          <td><a href="{{ route('update-users',['id' => $user->id])}}">modifier</a></td>
          <td>    {!! Form::open(['route' => ['delete-categories', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete') !!}
            {!! Form::close() !!}</td>
          </tr>
        </tbody>
      @endforeach
    </table>



@endsection
