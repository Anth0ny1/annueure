@extends('layouts/appback')

@section('title')
new categories
@endsection

@section('content')

  <h1>new article</h1>

  {!! Form::open(['route' => 'new-categories-action','method' => 'post']) !!}

  {!! Form::label('categories_name','votre nouvelle categorie') !!}
  {!! Form::text('categories_name', null,['class' => 'categories_name', 'placeholder' => 'votre nouvelle categorie']) !!}
  {!! $errors->first('categories_name', '<small class="help-block">:message</small>') !!}

  {!! Form::select('status', array('actif' => 'actif', 'inactif' => 'inactif')) !!}

  {!! Form::submit('Click Me!', ['class' => 'btn btn-success']) !!}

  {!! Form::close() !!}

@endsection
