@extends('layouts/appback')

@section('content')
  <h1>listing des Sociétés</h1>

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
            
            </td>
      @endforeach
  </table>
@endsection
