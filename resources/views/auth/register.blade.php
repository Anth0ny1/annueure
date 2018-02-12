@extends('front/layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                  {!! Form::open(['route' => 'nous-contacter-action','method' => 'post','class' => 'form-group']) !!}

                  {!! Form::label('lastname', 'Nom :', ['class' => 'label']) !!}<br />
                  {!! Form::text('lastname',null,['class' => 'nom','placeholder' => 'Nom']) !!}<br />
                  {!! $errors->first('lastname', '<small class="help-block">:message</small><br />') !!}

                  {!! Form::label('name', 'Prenom :', ['class' => 'label']) !!}<br />
                  {!! Form::text('name',null,['class' => 'nom','placeholder' => 'Prénom']) !!}<br />
                  {!! $errors->first('name', '<small class="help-block">:message</small><br />') !!}

                  {!! Form::label('city', 'Ville :', ['class' => 'label']) !!}<br />
                  {!! Form::text('city',null,['class' => 'nom','placeholder' => 'Ville']) !!}<br />
                  {!! $errors->first('city', '<small class="help-block">:message</small><br />') !!}

                  {!! Form::label('email', 'E-Mail Address *', ['class' => 'label']) !!}<br />
                  {!! Form::email('email',null,['class' => 'email','placeholder' => 'votre email']) !!}<br />
                  {!! $errors->first('email', '<small class="help-block">:message</small><br />') !!}

                  {!! Form::submit('OK',['class' => 'button']) !!}

                  {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
