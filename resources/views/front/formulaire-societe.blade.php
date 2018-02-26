@extends('layouts/layout')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/formulaire-societe.css') }}" />
@endsection

@section('title')
  Formulaire inscription d'une société
@endsection

@section('content')

<!-- Container principal -->
<main id="mainContainerPage">

<!-- Sidebar left (gauche) -->
@include('layouts.front.sidebarLeft')

  <!-- section principale (droite) -->
  <section class="mainContentRight">

    <h1 id="titlePageInt">Formulaire inscription société</h1>

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

    <div class="containerForm">
      <div class="formBox">

        {!! Form::open(['route' => 'formulaire-societe-action', 'method' => 'post', 'files' => true]) !!}

        <div class="form-group">
          {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!}
          <div class="col-md-6">
            {!! Form::text('name_society', null, ['class' => 'form-control','placeholder' => 'Nom de votre société']) !!}
            {!! $errors->first('name_society', '<small class="help-block">:message</small>') !!}
          </div>
        </div>

        <div class="form-group">
          {!! Form::label('gerant', 'Entrez le nom du gérant : ',['class' =>'col-md-4 control-label']) !!}
          <div class="col-md-6">
            {!! Form::text('gerant', null, ['class' => 'form-control','placeholder' => 'Nom du gérant']) !!}
            {!! $errors->first('gerant', '<small class="help-block">:message</small>') !!}
          </div>
        </div>

        <div class="form-group">
            {!! Form::label('adress', 'Entrez l\'adresse de votre société : ', ['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('adress', null, ['class' => 'form-control','placeholder' => 'Adresse complète']) !!}
            {!! $errors->first('adress', '<small class="help-block">:message</small>') !!}
          </div>
        </div>

        <div class="form-group">
            {!! Form::label('city', 'Entrez la ville du siège social : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('city', null, ['class' => 'form-control','placeholder' => 'Ville du siège']) !!}
            {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
          </div>
        </div>

        <div class="form-group">
            {!! Form::label('zip_code', 'Entrez le code postal : ', ['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('zip_code', null, ['class' => 'form-control','placeholder' => 'Code postal']) !!}
            {!! $errors->first('zip_code', '<small class="help-block">:message</small>') !!}
          </div>
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Entrez votre numéro de téléphone : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => 'Numéro de téléphone']) !!}
            {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Choississez votre catégorie :',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
              <?php $arrayCat = [];
              foreach ($categories as $cat)
              {
                    $arrayCat[$cat->id] = $cat->categorie_name;
              } ?>

              {{Form::select('categorie_name[]',$arrayCat,$cat->categorie_name,array('class' => 'form-control','multiple'=>'multiple','categorie_name'=>'categorie_name[]'))}}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('email', 'email : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'E-mail']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('site_web', 'site web : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('site_web', null, ['class' => 'form-control','placeholder' => 'Site Web']) !!}
            {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('siren', 'siren : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::text('siren', null, ['class' => 'form-control','placeholder' => 'Siren']) !!}
            {!! $errors->first('siren', '<small class="help-block">:message</small>') !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('skills', 'Descriptif de votre société  : ',['class' =>'col-md-4 control-label']) !!}
            <div class="col-md-6">
            {!! Form::textarea('skills', null, ['class' => 'form-control','placeholder' => 'Décrivez votre société en quelques lignes ...']) !!}
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

        {!! Form::close() !!}
        <!-- fermeture du formulaire -->
      </div>
    </div>
  </section> <!-- end section paragraphes -->
  <div class="clearfix"></div> <!-- classe clear pour fixer div aside -->
</main> <!-- end container -->
@endsection
