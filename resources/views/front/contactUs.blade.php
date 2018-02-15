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
<div class="textePresentation">
<h2>Nous contacter</h2>
</div>

<div class="container center_div">

  <div class="col-md-6">

    {!! Form::open(['route' => 'nous-contacter-action','method' => 'post','class' => 'form-group']) !!}

    <div class="form-group">
      {!! Form::label('nom', 'Nom *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::text('nom',null,['class' => 'form-control','placeholder' => 'votre nom']) !!}
      {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'E-Mail Address *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'votre email']) !!}
      {!! $errors->first('email', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('sujet', 'Sujet *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::text('sujet',null,['class' => 'form-control','placeholder' => 'votre sujet']) !!}
      {!! $errors->first('sujet', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('message', 'Message *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::textarea('message',null,['class' => 'form-control','placeholder' => 'votre message']) !!}
      {!! $errors->first('message', '<small class="help-block">:message</small><br />') !!}
    </div>

    {!! Form::submit('OK',['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
  </div>
</div>
  @section('js')
    <scriptsrc="{{ asset('admin/js/bootstrap.min.js') }}"></script>

  @endsection
@endsection
