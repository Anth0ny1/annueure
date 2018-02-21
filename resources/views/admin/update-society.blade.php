@extends('layouts/appback')

@section('content')
 <h1>Formulaire pour modifier une société</h1>

 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{!! Form::open(['route' => ['update-society-action',$society->id ], 'method' => 'put']) !!}

<div class="form-group">
  {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!}
  <div class="col-md-6">
      {!! Form::text('name_society', $society->name_society, ['class' => 'form-control']) !!}
      {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('gerant', 'Entrez le nom du gérant : ',['class' =>'col-md-4 control-label']) !!}
  <div class="col-md-6">
      {!! Form::text('gerant', $society->gerant, ['class' => 'form-control','placeholder' => 'Nom du gérant']) !!}
      {!! $errors->first('gerant', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('adress', 'Entrez l\'adresse de votre société : ', ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('adress', $society->adress, ['class' => 'form-control','placeholder' => 'Adresse complète']) !!}
      {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('city', 'Entrez la ville du siége : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('city', $society->city, ['class' => 'form-control','placeholder' => 'Ville du siège']) !!}
      {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('zip_code', 'Entrez le code postal : ', ['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('zip_code', $society->zip_code, ['class' => 'form-control','placeholder' => 'Code postal']) !!}
      {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('phone', 'Entrez votre numéro de téléphone : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('phone', $society->phone, ['class' => 'form-control','placeholder' => 'Numéro de téléphone']) !!}
      {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
  </div>
</div>
{{-- {{dd($categories)}} --}}
<div class="form-group">
    {!! Form::label('email', 'email : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('email', $society->email, ['class' => 'form-control','placeholder' => 'E-mail']) !!}
      {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('site_web', 'site web : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('site_web', $society->site_web, ['class' => 'form-control','placeholder' => 'Site Web']) !!}
      {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('siren', 'siren : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('siren', $society->siren, ['class' => 'form-control','placeholder' => 'Siren']) !!}
      {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('textarea', 'Description : ',['class' =>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::textarea('skills', $society->skills, ['class' => 'form-control','placeholder' => 'Mettez en avant vos compétences....']) !!}
      {!! $errors->first('skills', '<small class="help-block">:message</small>') !!}
  </div>
</div>

{{-- <div class="form-group">
  {!! Form::label('moderation', 'Status de la societé') !!}
  <div class="col-md-6">
    {!! Form::select('moderation', array('ok' => 'Ok', 'pasok' => 'Pas ok'), $society->moderation) !!}
    {!! $errors->first('moderation', '<span class="help-block">:message</span>') !!}
  </div>
</div> --}}
<div class="form-group">
  {{-- {!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">

    <?php $arrayCat = [];
    foreach ($categories as $cat)
    {
          $arrayCat[$cat->id] = $cat->categorie_name;
    } ?>

    {{Form::label('categorie_name', 'metier')}}
    {{Form::select('categorie_name[]',$arrayCat,$cat->id,array('multiple'=>'multiple','categorie_name'=>'categorie_name[]'))}}
  </div>
</div>


    {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

{!! Form::close() !!}
@endsection
