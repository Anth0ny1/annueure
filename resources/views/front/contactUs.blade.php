@extends('front/layout')

@section('title')
  Page de Contact
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

  <h2>Ici le formulaire de contact</h2>


<div class="form-group">
  {!! Form::open(['route' => 'nous-contacter-action','method' => 'post','class' => 'form-group']) !!}

    {!! Form::label('nom', 'Nom *', ['class' => 'label']) !!}<br />
    {!! Form::text('nom',null,['class' => 'nom','placeholder' => 'votre nom']) !!}<br />

    {!! Form::label('email', 'E-Mail Address *', ['class' => 'label']) !!}<br />
    {!! Form::email('email',null,['class' => 'email','placeholder' => 'votre email']) !!}<br />

    {!! Form::label('sujet', 'Sujet *', ['class' => 'label']) !!}<br />
    {!! Form::text('sujet',null,['class' => 'sujet','placeholder' => 'votre sujet']) !!}<br />

    {!! Form::label('message', 'Message *', ['class' => 'label']) !!}<br />
    {!! Form::textarea('message',null,['class' => 'message','placeholder' => 'votre message']) !!}<br />

    {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!}
    {!! $errors->first('email', '<small class="help-block">:message</small><br />') !!}
    {!! $errors->first('sujet', '<small class="help-block">:message</small><br />') !!}
    {!! $errors->first('message', '<small class="help-block">:message</small><br />') !!}

    {!! Form::submit('OK',['class' => 'button']) !!}

  {!! Form::close() !!}
</div>
@endsection
