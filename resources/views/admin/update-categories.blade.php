@extends('layouts/appback')

@section('content')
<h1>Formulaire pour modifier une categorie</h1>
{!! Form::open(['route' => ['update-categories-action', $categorie->id], 'method' => 'put']) !!}

    {{-- Champ Titre --}}
    {!! Form::label('categorie_name', 'Titre de votre categorie') !!}

    {!! Form::text('categorie_name', $categorie->categorie_name) !!}
    {!! $errors->first('categorie_name', '<span class="help-block">:message</span>') !!}

    {!! Form::label('image','Image de la catégorie') !!}

    {!! Form::file('image') !!}
    {!! $errors->first('image', '<small class="help-block">:message</small>')!!}
    
    {!! Form::submit('envoyer') !!}
{!! Form::close() !!}
@endsection
