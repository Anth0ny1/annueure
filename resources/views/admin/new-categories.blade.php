@extends('layouts/appback')

@section('title')
new categories
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
  <div class="" style="color:tomato; text-align:center;">
    <h1>Nouvelle categorie</h1>
    <h5>Cette page vous permettra de créer une nouvelle catégorie.</h5><br />
  </div>

  {!! Form::open(['route' => 'new-categories-action','method' => 'post', 'class' => 'form-horizontal form-label-left', 'id' => 'demo-form2', 'files' => true]) !!}

  <div class="form-group">
    {!! Form::label('categorie_name','votre nouvelle categorie',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('categorie_name', null,['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'votre nouvelle categorie']) !!}
      {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('description','Description de la categorie',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('description', null,['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Description de la catégorie']) !!}
      {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('image','Image de la catégorie',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::file('image', ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('image', '<small class="help-block">:message</small>')!!}
    </div>
  </div>
  {{-- {!! Form::select('status', array('actif' => 'actif', 'inactif' => 'inactif')) !!} --}}

  <div class="form-group">
    <div class="col-md-12" style="text-align:center;">
      {!! Form::submit('Ajouter votre catégorie !', ['class' => 'btn btn-success']) !!}
    </div>
  </div>
  {!! Form::close() !!}

@endsection
