@extends('layouts/appback')

@section('content')
  <h1>Formulaire pour modifier un utilisateur</h1>
  {!! Form::open(['route' => ['update-users-action', $user->id], 'method' => 'put']) !!}

      {{-- Champ Titre --}}
      {!! Form::label('name', 'Titre de votre categorie') !!}

      {!! Form::text('name', $user->name) !!}
      {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('lastname', 'Titre de votre categorie') !!}

      {!! Form::text('lastname', $user->lastname) !!}
      {!! $errors->first('lastname', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('city', 'Titre de votre categorie') !!}

      {!! Form::text('city', $user->city) !!}
      {!! $errors->first('city', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('email', 'Titre de votre categorie') !!}

      {!! Form::text('email', $user->email) !!}
      {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('password', 'Titre de votre categorie') !!}

      {!! Form::text('password', $user->password) !!}
      {!! $errors->first('password', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('role', 'Titre de votre categorie') !!}

      {!! Form::select('role', array('actif' => 'Actif', 'inactif' => 'Inactif')) !!}



      {!! Form::submit('envoyer') !!}
  {!! Form::close() !!}

@endsection
