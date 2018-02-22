@extends('layouts/appback')

@section('content')
  <div style="color:tomato; text-align:center;">
    <h1>Modifier un utilisateur</h1>
    <h5>Cette page vous permettra de modifier vos informations utilisateur.</h5><br />
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

<div class="x_content">   <!--  Ouverture de x_content page update-users  -->
                        <!--  Backoffice page => Modification d'un utilisateur  -->

  {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate style="text-align: center;"> --}}
      {!! Form::open(['route' => ['update-users-action', $user->id], 'method' => 'put']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Votre prénom : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::text('name', $user->name, ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
  </div>

    <div class="form-group">
      {!! Form::label('lastname', 'Votre nom : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::text('lastname', $user->lastname, ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('lastname', '<span class="help-block">:message</span>') !!}
    </div>
  </div>

    <div class="form-group">
      {!! Form::label('city', 'Votre ville : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::text('city', $user->city, ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
    </div>
  </div>

    <div class="form-group">
      {!! Form::label('email', 'Votre email : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::text('email', $user->email, ['class' => 'form-control col-md-7 col-xs-12'], array('disabled')) !!}
      {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>
  </div>

    <div class="form-group">
      {!! Form::label('status', 'Status de l\'utilisateur : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::select('status', array('actif' => 'Actif', 'inactif' => 'Inactif'), $user->status, ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
    </div>
  </div>

      <div class="form-group">
      {!! Form::label('role', 'Role de l\'utilisateur : ',['class' =>'col-md-4 control-label']) !!}
      <div class="col-md-6">
      {!! Form::select('role', array('membre' => 'Membre', 'admin' => 'Admin'), $user->role, ['class' => 'form-control col-md-7 col-xs-12']) !!}
      {!! $errors->first('role', '<span class="help-block">:message</span>') !!}
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-12" style="text-align:center;">
      {!! Form::submit('envoyer',['class' => ' btn btn-success']) !!}
      {!! Form::close() !!}
    </div>
  </div>

  {{-- </form> --}}
</div>      <!--  Fermeture / de x_content page update-users  -->

@endsection
