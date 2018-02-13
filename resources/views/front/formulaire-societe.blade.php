@extends('front/layout')

@section('title')
Inscription societe
@endsection

@section('content')


  <h2>Formulaire inscription société</h2>

{!! Form::open(['route' => 'formulaire-societe-action', 'method' => 'post']) !!}

<div class="form-group">
  {{-- {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">
    {!! Form::text('name_society', null, ['class' => 'form-control','placeholder' => 'Nom de votre société']) !!}
    {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('adress', 'Entrez l\'adresse de votre société : ', ['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('adress', null, ['class' => 'form-control','placeholder' => 'Adresse complète']) !!}
    {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('city', 'Entrez la ville du siége : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('city', null, ['class' => 'form-control','placeholder' => 'Ville du siège']) !!}
    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
    {{-- {!! Form::label('zip_code', 'Entrez le code postal : ', ['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('zip_code', null, ['class' => 'form-control','placeholder' => 'Code postal']) !!}
    {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('phone', 'Entrez votre numéro de téléphone : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => 'Numéro de téléphone']) !!}
    {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
  </div>
</div>
{{-- {{dd($categories)}} --}}
<div class="form-group">
{!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
<select name="categorie_name" id="categorie_name" class="col-md-6">
    <option value=""> -- Catégorie métier --</option>
    @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->categorie_name }}</option>
    @endforeach
</select>
</div>
  </div>
<div class="form-group">
    {{-- {!! Form::label('email', 'email : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'E-mail']) !!}
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('site_web', 'site web : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('site_web', null, ['class' => 'form-control','placeholder' => 'Site Web']) !!}
    {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('siren', 'siren : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('siren', null, ['class' => 'form-control','placeholder' => 'Siren']) !!}
    {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
  </div>
</div>

    {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

{!! Form::close() !!}

@endsection
