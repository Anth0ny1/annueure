@extends('layouts/layout')

@section('title')
  Modifier ma societe
@endsection

@section('content')
  OkUpdateView<br>
    {{-- {{ $soUp->siren }}<br> --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if (session('danger'))
      <div class="alert alert-danger">
        {{ session('danger') }}
      </div>
    @endif
    
@foreach ($societyUpdate as $soUp)
  <div class="container center_div">
  <div class="panel-body">
{!! Form::open(['route' => ['update-societes-action', $soUp->id], 'method' => 'put', 'files' => true]) !!}

<div class="form-group">
  {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::text('name_society', $soUp->name_society, ['class' => 'form-control','placeholder' => 'Nom de votre société']) !!}
    {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('gerant', 'Entrez le nom du gérant : ',['class' =>'col-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::text('gerant', $soUp->gerant, ['class' => 'form-control','placeholder' => 'Nom du gérant']) !!}
    {!! $errors->first('gerant', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('adress', 'Entrez l\'adresse de votre société : ', ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('adress', $soUp->adress, ['class' => 'form-control','placeholder' => 'Adresse complète']) !!}
    {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('city', 'Entrez la ville du siége : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('city', $soUp->city, ['class' => 'form-control','placeholder' => 'Ville du siège']) !!}
    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('zip_code', 'Entrez le code postal : ', ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('zip_code', $soUp->zip_code, ['class' => 'form-control','placeholder' => 'Code postal']) !!}
    {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('phone', 'Entrez votre numéro de téléphone : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('phone', $soUp->phone, ['class' => 'form-control','placeholder' => 'Numéro de téléphone']) !!}
    {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
  </div>
</div>




<div class="form-group">
    {!! Form::label('email', 'email : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('email', $soUp->email, ['class' => 'form-control','placeholder' => 'E-mail']) !!}
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('site_web', 'site web : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('site_web', $soUp->site_web, ['class' => 'form-control','placeholder' => 'Site Web']) !!}
    {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('siren', 'siren : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('siren', $soUp->siren, ['class' => 'form-control','placeholder' => 'Siren']) !!}
    {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('skills', 'Descriptif de votre société  : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::textarea('skills', $soUp->skills, ['class' => 'form-control','placeholder' => 'Décrivez votre société en quelques lignes ...']) !!}
    {!! $errors->first('skills', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('logo','Logo de votre société : ',['class' =>'col-md-4 control-label']) !!}

  <div class="col-md-6">
{!! Form::file('logo' ,  ['class' => 'form-control-file']) !!}
{!! $errors->first('logo', '<small class="help-block">:message</small>')!!}
</div>
</div>

{!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

  </div>
</div>
@endforeach

  {{-- {{ Auth::id()}} --}}
@endsection
