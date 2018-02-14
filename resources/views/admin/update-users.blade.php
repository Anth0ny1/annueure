@extends('layouts/appback')

@section('content')
  <h1>Formulaire pour modifier un utilisateur</h1>
  {!! Form::open(['route' => ['update-users-action', $user->id], 'method' => 'put']) !!}

      {{-- Champ Titre --}}
      {!! Form::label('name', 'Votre prénom') !!}

      {!! Form::text('name', $user->name) !!}
      {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('lastname', 'Votre nom') !!}

      {!! Form::text('lastname', $user->lastname) !!}
      {!! $errors->first('lastname', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('city', 'Votre ville') !!}

      {!! Form::text('city', $user->city) !!}
      {!! $errors->first('city', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('email', 'Votre email') !!}

      {!! Form::text('email', $user->email) !!}
      {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('role', 'Role de l\'utilisateur') !!}

      {!! Form::select('role', array('actif' => 'Actif', 'inactif' => 'Inactif')) !!}



      {!! Form::submit('envoyer') !!}
  {!! Form::close() !!}

@endsection
