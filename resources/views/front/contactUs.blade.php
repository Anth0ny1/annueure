@extends('layouts/layout')

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

<h2>page nous contacter</h2>

  <div class="col-md-6">

    {!! Form::open(['route' => 'nous-contacter-action','method' => 'post','class' => 'form-group']) !!}

    <div class="form-group">
      {!! Form::label('nom', 'Nom *', ['class' => 'col-md-6 control-label']) !!}<br />
      {!! Form::text('nom',null,['class' => 'form-control','placeholder' => 'votre nom']) !!}<br />
      {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'E-Mail Address *', ['class' => 'col-md-6 control-label']) !!}<br />
      {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'votre email']) !!}<br />
      {!! $errors->first('email', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('sujet', 'Sujet *', ['class' => 'col-md-6 control-label']) !!}<br />
      {!! Form::text('sujet',null,['class' => 'form-control','placeholder' => 'votre sujet']) !!}<br />
      {!! $errors->first('sujet', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('message', 'Message *', ['class' => 'col-md-6 control-label']) !!}<br />
      {!! Form::textarea('message',null,['class' => 'form-control','placeholder' => 'votre message']) !!}<br />
      {!! $errors->first('message', '<small class="help-block">:message</small><br />') !!}
    </div>

    {!! Form::submit('OK',['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
  </div>

  @section('js')
    <scriptsrc="{{ asset('admin/js/bootstrap.min.js') }}"></script>

  @endsection
@endsection
