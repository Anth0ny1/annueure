@extends('layouts/layout')

@section('title')
Inscription societe
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
  {{-- {!! Form::label('gerant', 'Entrez le nom du gérant : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">
    {!! Form::text('gerant', null, ['class' => 'form-control','placeholder' => 'Nom du gérant']) !!}
    {!! $errors->first('gerant', '<small class="help-block">:message</small>') !!}
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

{!! Form::label('image','Image de la catégorie') !!}

{!! Form::file('image') !!}
{!! $errors->first('image', '<small class="help-block">:message</small>')!!}
{{-- {{dd($categories)}} --}}




<div class="form-group">
  {{-- {!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">

    <?php $arrayCat = [];
    foreach ($categories as $cat)
    {
          $arrayCat[$cat->id] = $cat->categorie_name;
    } ?>

    {{-- {!! Form::select('categorie_name',$arrayCat,null,array()) !!} --}}
    {{Form::label('categorie_name', 'metier')}}
    {{Form::select('categorie_name[]',$arrayCat,$cat->categorie_name,array('multiple'=>'multiple','categorie_name'=>'categorie_name[]'))}}
  </div>
</div>





{{-- <div class="form-group">
{!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
<select name="categorie_name" id="categorie_name" class="col-md-6">
    <option value=""> -- Catégorie métier --</option>
    @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->categorie_name }}</option>
    @endforeach
    {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}

</select>
</div>
  </div> --}}
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

<div class="form-group">
    {{-- {!! Form::textarea('textarea', 'textarea : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::textarea('skills', null, ['class' => 'form-control','placeholder' => 'Mettez en avant vos compétences....']) !!}
    {!! $errors->first('skills', '<small class="help-block">:message</small>') !!}
  </div>
</div>

    {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

{!! Form::close() !!}

@endsection
