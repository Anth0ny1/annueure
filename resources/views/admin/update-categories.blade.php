@extends('layouts/appback')

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
  
<h1>Formulaire pour modifier une categorie</h1>
{!! Form::open(['route' => ['update-categories-action', $categorie->id], 'method' => 'put', 'files' => true]) !!}

    {{-- Champ Titre --}}
    {!! Form::label('categorie_name', 'Titre de votre categorie') !!}

    {!! Form::text('categorie_name', $categorie->categorie_name) !!}
    {!! $errors->first('categorie_name', '<span class="help-block">:message</span>') !!}

    {!! Form::label('description', 'Description : ') !!}

    {!! Form::text('description', null,['class' => 'categories_name', 'placeholder' => 'Description de la catégorie']) !!}
    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}

    {!! Form::label('image','Image de la catégorie') !!}

    {!! Form::file('image') !!}
    {!! $errors->first('image', '<small class="help-block">:message</small>')!!}

    {!! Form::submit('envoyer') !!}
{!! Form::close() !!}
@endsection
