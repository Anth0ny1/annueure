@extends('layouts/appback')

@section('content')
<<<<<<< HEAD
  <h1>listing des Utilisateurs</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>email</th>
        <th>Role</th>
        <th>créé le</th>
        <th>modifié le</th>
      </tr>
    </thead>
    @foreach ($users as $user)
      <tbody>
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->lastname }}</td>
          <td>{{ $user->city }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
=======
  <h1>listing des Categories</h1>
  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>

  @foreach ($users as $user)
    {{ $user->name }}

    <a href="{{ route('update-users',['id' => $user->id])}}">modifier</a>
    {!! Form::open(['route' => ['delete-categories', $user->id], 'method' => 'delete']) !!}
      {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
  @endforeach
>>>>>>> 16052d025970fb163d9ed6660a8920184958c92b
@endsection
