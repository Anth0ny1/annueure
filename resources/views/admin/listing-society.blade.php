@extends('layouts/appback')

@section('content')
  <h1>listing des Sociétés</h1>


  <table>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom de la société</th>
          <th>Adresse</th>
          <th>City</th>
          <th>Phone</th>
          <th>Site Web</th>
          <th>E-Mail</th>
          <th>Siren</th>
          <th>Société crée le</th>
          <th>Modification</th>
          <th>Effacer</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($societies as $societie)
          <tr>
            <td>{{ $societie->id }}</td>
            <td>{{ $societie->name_society }}</td>
            <td>{{ $societie->adress }}</td>
            <td>{{ $societie->city }}</td>
            <td>{{ $societie->phone }}</td>
            <td>{{ $societie->site_web }}</td>
            <td>{{ $societie->email }}</td>
            <td>{{ $societie->siren }}</td>
            <td>{{ $societie->created_at }}</td>
            <td><a href="{{ route('update-society',['id' => $societie->id])}}">modifier</a></td>
            <td>
              {!! Form::open(['route' => ['delete-society', $societie->id], 'method' => 'delete']) !!}
              {!! Form::submit('Delete') !!}
              {!! Form::close() !!}
            </td>
          </tr>

        @endforeach
      </tbody>
    </table>

  @endsection
