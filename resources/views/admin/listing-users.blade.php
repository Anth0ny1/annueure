@extends('layouts/appback')

@section('content')
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
@endsection
