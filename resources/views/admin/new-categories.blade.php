@extends('layouts/appback')

@section('title')
new categories
@endsection

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1>Nouvelle catégorie</h1>

  {!! Form::open(['route' => 'new-categories-action','method' => 'post', 'files' => true]) !!}

  {!! Form::label('categorie_name','votre nouvelle categorie') !!}

  {!! Form::text('categorie_name', null,['class' => 'categories_name', 'placeholder' => 'votre nouvelle categorie']) !!}
  {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}

  {!! Form::text('description', null,['class' => 'categories_name', 'placeholder' => 'Description de la catégorie']) !!}
  {!! $errors->first('description', '<small class="help-block">:message</small>') !!}

  {!! Form::label('image','Image de la catégorie') !!}

  {!! Form::file('image') !!}
  {!! $errors->first('image', '<small class="help-block">:message</small>')!!}
  {{-- {!! Form::select('status', array('actif' => 'actif', 'inactif' => 'inactif')) !!} --}}

  {!! Form::submit('Ajouter votre catégorie !', ['class' => 'btn btn-success']) !!}

  {!! Form::close() !!}

@endsection
