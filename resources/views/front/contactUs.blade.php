@extends('layouts/layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/contactus.css') }}" />
@endsection
@section('title')
  Nous contacter
@endsection

@section('content')
  <div class="textePresentation">
  <h1 id="titlePageInt">Nous contacter</h1>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

    {{-- @include('layouts.front.sidebarLeft') --}}
<div class="container center_div">
<div class="panel-body">


  <div class="col-md-6">

    {!! Form::open(['route' => 'nous-contacter-action','method' => 'post','class' => 'form-group']) !!}

    <div class="form-group">
      {!! Form::label('nom', 'Nom *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::text('nom',null,['class' => 'form-control','placeholder' => 'votre nom']) !!}
      {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Adresse E-Mail *', ['class' => 'col-md-6 control-label']) !!}
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

    {!! Form::submit('Envoyez votre message',['class' => 'btn-primary']) !!}
    {!! Form::close() !!}
  </div>

  </div>
</div>
  @section('js')
    <scriptsrc="{{ asset('admin/js/bootstrap.min.js') }}"></script>

  @endsection
@endsection
