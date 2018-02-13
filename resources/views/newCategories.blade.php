@extends('dashboard')

@section('content')
  {!! Form::open(['route' => 'new-categories-action', 'method' => 'post']) !!}

    {{-- Champ Nom --}}
    {!! Form::label('name', 'Votre nom de categorie') !!}

    {!! Form::text('name', null, ['class' => 'dede', 'placeholder' => 'Michel']) !!}
    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

    {!! Form::submit('envoyer') !!}
  {!! Form::close() !!}
@endsection
