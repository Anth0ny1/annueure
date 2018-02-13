@extends('layouts/appback')

@section('content')
  <h1>listing des Categories</h1>
  <a href="{{ route('new-categories') }}">ajouter nouvelle catégorie</a>

  @foreach ($users as $user)
    {{ $user->name }}

    <a href="{{ route('update-users',['id' => $user->id])}}">modifier</a>
    {!! Form::open(['route' => ['delete-categories', $user->id], 'method' => 'delete']) !!}
      {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
  @endforeach
@endsection
