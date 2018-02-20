@extends('layouts/appback')

@section('content')
  <h1>listing des Sociétés</h1>

  {{-- {{dd($societiesbyid)}} --}}
  {{-- {{dd($categories)}} --}}
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
        {{-- <th>Métier</th> --}}
        <th>Société crée le</th>
        <th>Société modifié le</th>
        <th>Modification</th>
        <th>Delete</th>
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
          {{-- <td> '$societie->categories->categorie_name' </td> --}}
          {{-- <td> @foreach ($societies->category as $a)
          {{dd($a)}}
        @endforeach </td> --}}
        {{-- @foreach ($categoriesby as $category)
        <td>{{$category->categorie_name}}</td>
      @endforeach --}}

      <td>{{ $societie->created_at }}</td>
      <td>{{ $societie->updated_at }}</td>


      <td><a class="btn btn-round btn-primary" href="{{ route('update-society',['id' => $societie->id])}}">modifier</a></td>
      <td>
        {!! Form::open(['route' => ['delete-society', $societie->id],  'method' => 'delete']) !!}
        {!! Form::submit('Delete',['class' => 'btn btn-round btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    @endforeach



  </tbody>
  </table>
  
  {{ $societies->links() }}

@endsection
