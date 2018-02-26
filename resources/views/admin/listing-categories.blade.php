@extends('layouts/appback')

@section('content')

  <h1 style="color:tomato; text-align:center;">listing des Categories</h1>


  <a class="btn btn-info" href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom de la catégorie</th>
        <th>description</th>
        <th>image</th>
        <th>Modification</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
        <tr>
          <td>{{ $categorie->id }}</td>
          <td>{{ $categorie->categorie_name }}</td>
          <td>{{ $categorie->description }}</td>
          <td><img src="{{ Image::url(  route ('home') . '/' . $categorie->path . '/' . $categorie->original_name,100,100,array('crop',))}}" alt="" /></td>
          <td><a class="btn btn-round btn-primary" href="{{ route('update-categories',['id' => $categorie->id])}}">modifier</a></td>
          <td>
            {!! Form::open(['route' => ['delete-categories', $categorie->id], 'method' => 'delete']) !!}
              {!! Form::submit('Delete',['class' => 'btn btn-round btn-danger']) !!}
            {!! Form::close() !!}</td>
            {{-- <a href="{{ route('delete-categories',['id' => $categorie->id])}}">effacer</a> --}}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

    {{ $categories->links() }}
@endsection
