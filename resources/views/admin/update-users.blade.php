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

      {!! Form::text('email', $user->email, array('disabled')) !!}
      {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

      {{-- Champ Titre --}}
      {!! Form::label('status', 'Status de l\'utilisateur') !!}

      {!! Form::select('status', array('actif' => 'Actif', 'inactif' => 'Inactif'), $user->status) !!}
      {!! $errors->first('status', '<span class="help-block">:message</span>') !!}

      {!! Form::label('role', 'Role de l\'utilisateur') !!}

      {!! Form::select('role', array('membre' => 'Membre', 'admin' => 'Admin'), $user->role) !!}
      {!! $errors->first('role', '<span class="help-block">:message</span>') !!}


      {!! Form::submit('envoyer') !!}
  {!! Form::close() !!}

@endsection
