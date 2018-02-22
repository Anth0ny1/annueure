@extends('layouts/appback')

@section('content')
  <div class="" style="color:tomato; text-align: center;">
  <h1>Modifier une société</h1>
    <h5>cette page vous permettra de modifier les informations de votre entreprise.</h4><br />
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

  <div class="x_content">   <!--  Ouverture de x_content page update-society  -->
                          <!--  Backoffice page => Modification d'une société  -->

    {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate style="text-align: center;"> --}}

      {!! Form::open(['route' => ['update-society-action',$society->id ],  'class' => 'form-horizontal form-label-left', 'id' => 'demo-form2', 'method' => 'put']) !!}

      <div class="form-group">
        {!! Form::label('name_society', 'Entrez le nom de votre société : ',['class' =>'col-md-4 control-label']) !!}
        <div class="col-md-6">
          {!! Form::text('name_society', $society->name_society, ['class' => 'form-control col-md-7 col-xs-12']) !!}
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


      <div class="form-group">       <!--  select-box Métiers  -->

        {{-- {!! Form::label('categorie_name', 'Choississez votre catégorie : ',['class' =>'col-md-4 control-label']) !!} --}}

            <?php $arrayCat = [];
            foreach ($categories as $cat) {
              $arrayCat[$cat->id] = $cat->categorie_name;
            } ?>
            {{-- {{dd($arrayCat)}} --}}
        <div class="form-group">

          {{-- {!! Form::select('categorie_name',$arrayCat,null,array()) !!} --}}

          {{Form::label('categorie_name', 'metier : ',['class' =>'col-md-4 control-label'])}}

          {{Form::select('categorie_name[]',$arrayCat,$cat->id,array('class' => 'col-md-6 control-label','multiple'=>'multiple','categorie_name'=>'categorie_name[]'))}}

        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12" style="text-align:center;">
          {!! Form::submit('Envoyer !',['class' => ' btn btn-success']) !!}
          {!! Form::close() !!}
        </div>
      </div>

    {{-- </form> --}}
  </div>      <!--  Fermeture de x_content page update-society  -->

@endsection
