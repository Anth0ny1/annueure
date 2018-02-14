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
        <th>Modification</th>
        <th>Supression</th>
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
          <td><a href="{{ route('update-users',['id' => $user->id])}}">modifier</a></td>
          <td>
            {!! Form::open(['route' => ['update-users', $user->id], 'method' => 'delete']) !!}
              {!! Form::submit('Delete') !!}
            {!! Form::close() !!}
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>

@endsection
