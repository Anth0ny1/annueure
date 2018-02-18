@extends('layouts/layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection
@section('content')
  <div class="textePresentation">
  <h2>Enregistrement</h2>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Votre nom" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                          {!! Form::label('lastname', ' Prénom :', ['class' => 'col-md-4 control-label']) !!}<br />
                          <div class="col-md-6">
                            {!! Form::text('lastname',null,['class' => 'form-control','placeholder' => 'Votre prénom']) !!}<br />

                            {!! $errors->first('lastname', '<small class="help-block">:message</small><br />') !!}
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                          {!! Form::label('city', 'Ville :', ['class' => 'col-md-4 control-label']) !!}<br />
                          <div class="col-md-6">
                            {!! Form::text('city',null,['class' => 'form-control','placeholder' => 'Votre ville']) !!}<br />

                            {!! $errors->first('city', '<small class="help-block">:message</small><br />') !!}
                          </div>
                        </div>




                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse E-Mail :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  placeholder="Votre Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"  placeholder="Votre mot de passe" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password :</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"  placeholder="Confirmez votre mot de passe" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    S'enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
