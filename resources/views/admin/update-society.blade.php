@extends('layouts/appback')

@section('content')
 <h1>Formulaire pour modifier une société</h1>


{!! Form::open(['route' => ['update-society-action',$society->id ], 'method' => 'put']) !!}

<div class="form-group">
  {{-- {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">
    {!! Form::text('name_society', $society->name_society, ['class' => 'form-control']) !!}
    {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
  {{-- {!! Form::label('gerant', 'Entrez le nom du gérant : ',['class' =>'col-md-4 control-label']) !!} --}}
  <div class="col-md-6">
    {!! Form::text('gerant', $society->gerant, ['class' => 'form-control','placeholder' => 'Nom du gérant']) !!}
    {!! $errors->first('gerant', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('adress', 'Entrez l\'adresse de votre société : ', ['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('adress', $society->adress, ['class' => 'form-control','placeholder' => 'Adresse complète']) !!}
    {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('city', 'Entrez la ville du siége : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('city', $society->city, ['class' => 'form-control','placeholder' => 'Ville du siège']) !!}
    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
  </div>
</div>
<div class="form-group">
    {{-- {!! Form::label('zip_code', 'Entrez le code postal : ', ['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('zip_code', $society->zip_code, ['class' => 'form-control','placeholder' => 'Code postal']) !!}
    {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('phone', 'Entrez votre numéro de téléphone : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('phone', $society->phone, ['class' => 'form-control','placeholder' => 'Numéro de téléphone']) !!}
    {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
  </div>
</div>
{{-- {{dd($categories)}} --}}
<div class="form-group">
  {!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!}
  <div class="col-md-6">

    <?php $michel = [];foreach ($categories as $cat)
    {
          $michel[$cat->id]=$cat->categorie_name;
    } ?>

    {!! Form::select('categorie_name',$michel,null,array()) !!}

    {{-- <select name="categorie_name" id="categorie_name" class="col-md-6">
      <option value=""> -- Catégorie métier --</option>
      @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->categorie_name }}</option>
      @endforeach
      {!! $errors->first('categorie_name', '<small class="help-block">:message</small>') !!}

    </select> --}}
  </div>
</div>







<div class="form-group">
    {{-- {!! Form::label('email', 'email : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('email', $society->email, ['class' => 'form-control','placeholder' => 'E-mail']) !!}
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('site_web', 'site web : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('site_web', $society->site_web, ['class' => 'form-control','placeholder' => 'Site Web']) !!}
    {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::label('siren', 'siren : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::text('siren', $society->siren, ['class' => 'form-control','placeholder' => 'Siren']) !!}
    {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
  </div>
</div>

<div class="form-group">
    {{-- {!! Form::textarea('textarea', 'textarea : ',['class' =>'col-md-4 control-label']) !!} --}}
    <div class="col-md-6">
    {!! Form::textarea('skills', $society->skills, ['class' => 'form-control','placeholder' => 'Mettez en avant vos compétences....']) !!}
    {!! $errors->first('skills', '<small class="help-block">:message</small>') !!}
  </div>
</div>

    {!! Form::submit('Envoyer !',['class' => ' btn btn-succes']) !!}

{!! Form::close() !!}
@endsection
