@extends('layouts/appback')

@section('content')
<<<<<<< HEAD

=======
>>>>>>> aa14b0066ff6566736a1bbc72b53c5d11fa75bd2
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
<<<<<<< HEAD
        <th>Créé le</th>
        <th>Modifié le</th>
        <th>Modifier l'utilisateur</th>
        <th>Effacer</th>
=======
        <th>Modification</th>
        <th>Supression</th>
>>>>>>> aa14b0066ff6566736a1bbc72b53c5d11fa75bd2
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
<<<<<<< HEAD
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
=======
          <td><a href="{{ route('update-users',['id' => $user->id])}}">modifier</a></td>
          <td>
            {!! Form::open(['route' => ['update-users', $user->id], 'method' => 'delete']) !!}
              {!! Form::submit('Delete') !!}
            {!! Form::close() !!}
          </td>
        </tr>

    @endforeach
          </tbody>
  </table>

@endsection
>>>>>>> aa14b0066ff6566736a1bbc72b53c5d11fa75bd2
