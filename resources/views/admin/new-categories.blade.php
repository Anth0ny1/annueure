@extends('layouts/appback')

@section('title')
new categories
@endsection

@section('content')

  <h1>new article</h1>

  {!! Form::open(['route' => 'new-categories-action','method' => 'post']) !!}

  {!! Form::label('categorie_name','votre nouvelle categorie') !!}
  {!! Form::text('categorie_name', null,['class' => 'categories_name', 'placeholder' => 'votre nouvelle categorie']) !!}
  {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}

  {{-- {!! Form::select('status', array('actif' => 'actif', 'inactif' => 'inactif')) !!} --}}

  {!! Form::submit('Ajouter votre catégorie !', ['class' => 'btn btn-success']) !!}

  {!! Form::close() !!}

@endsection
