@extends('front/layout')

@section('title')
Inscription societe
@endsection

@section('content')


  <h2>Formulaire</h2>
{!! Form::open(['route' => 'formulaire-societe-action', 'method' => 'post']) !!}


<div class="form-group">
  {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-labelcol-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::text('name_society', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('adress', 'Entrez l\'adresse de votre société : ') !!}
    <div class="col-md-6">
    {!! Form::text('adress', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('city', 'Entrez la ville du siége : ') !!}
    <div class="col-md-6">
    {!! Form::text('city', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('zip_code', 'Entrez le code postal : ') !!}
    <div class="col-md-6">
    {!! Form::text('zip_code', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('phone', 'Entrez votre numéro de téléphone : ') !!}
    <div class="col-md-6">
    {!! Form::text('phone', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<select name="categorie_name" id="categorie_name" class="form-control">
    <option value=""> -- Select One --</option>
    @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
</select>
<div class="form-group">
    {!! Form::label('email', 'email : ') !!}
    <div class="col-md-6">
    {!! Form::text('email', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('site_web', 'site web : ') !!}
    <div class="col-md-6">
    {!! Form::text('site_web', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('siren', 'siren : ') !!}
    <div class="col-md-6">
    {!! Form::text('siren', null, ['class' => 'dede','placeholder' => '']) !!}
    {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
  </div>
</div>

    {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

{!! Form::close() !!}

@endsection
