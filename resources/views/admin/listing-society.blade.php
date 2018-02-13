@extends('layouts/appback')

@section('content')
  <h1>listing des Sociétés</h1>
  <a href="{{ route('update-society') }}">ajouter nouvelle société</a>
  <table>
      @foreach ($societies as $societie)
        <tr>
          <td>{{ $societie->name_society }}</td>
          <td>{{ $societie->adress }}</td>
          <td>{{ $societie->city }}</td>
          <td>{{ $societie->phone }}</td>
          <td>{{ $societie->site_web }}</td>
          <td>{{ $societie->email }}</td>
          <td>{{ $societie->siren }}</td>
        </tr>
            <td>
              <a href="{{ route('delete-society',['id' => $societie->id])}}">effacer</a>
            </td>
      @endforeach
  </table>
@endsection
