@extends('layouts/appback')

@section('content')

  <div class="" style="color:tomato; text-align:center;">
    <h1>Modifier une categorie</h1>
    <h5>Cette page vous permettra de modifier une catégorie.</h5><br />
  </div>

  <div class="x_content">   <!--  Ouverture de x_content page update-categorie  -->
                          <!--  Backoffice page => Modification d'une catégorie  -->
  {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate style="text-align: center;"> --}}
      {!! Form::open(['route' => ['update-categories-action', $categorie->id], 'method' => 'put', 'files' => true]) !!}

    <div class="form-group">
      {!! Form::label('categorie_name', 'Titre de votre categorie : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('categorie_name', $categorie->categorie_name, ['class' => 'form-control col-md-7 col-xs-12']) !!}
        {!! $errors->first('categorie_name', '<span class="help-block">:message</span>') !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
        {!! Form::text('description', null,['class' => 'form-control col-md-7 col-xs-12', 'categories_name', 'placeholder' => 'Description de la catégorie']) !!}
        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('image','Image de la catégorie : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
        {!! Form::file('image', ['class' => 'form-control col-md-7 col-xs-12']) !!}
        {!! $errors->first('image', '<small class="help-block">:message</small>')!!}
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12" style="text-align:center;">
        {!! Form::submit('envoyer',['class' => ' btn btn-success']) !!}
        {!! Form::close() !!}
      </div>
    </div>

  {{-- </form> --}}
</div>      <!--  Fermeture / de x_content page update-categorie  -->

@endsection
