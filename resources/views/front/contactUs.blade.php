@extends('layouts/layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/contactus.css') }}" />
@endsection
@section('title')
  Nous contacter
@endsection

@section('content')

<!-- Container principal -->
<main id="mainContainerPage">

<!-- Sidebar left (gauche) -->
@include('layouts.front.sidebarLeft')

  <!-- section principale (droite) -->
  <section class="mainContentRight">

    <h1 id="titlePageInt">Nous contacter</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
<style media="screen">
  .spinner{
    display: none;
  }
</style>
  {{-- @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

<div class="container center_div">
<div class="panel-body">


  <div class="col-md-6">

    {!! Form::open(['route' => 'nous-contacter','method' => 'post','class' => 'form-group', 'id' => 'contactUsAjax']) !!}

    <div class="form-group">
      {!! Form::label('nom', 'Nom *', ['class' => 'col-md-6 control-label']) !!}
      {!! Form::text('nom',null,['class' => 'form-control','placeholder' => 'votre nom']) !!}
      {{-- {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!} --}}
{{-- ======= --}}

  @if (session('danger'))
    <div class="alert alert-danger">
      {{ session('danger') }}
    </div>
  @endif
    {{-- @include('layouts.front.sidebarLeft') --}}
    <div class="redirect"></div>

    <div class="containerForm">
      <div class="formBox">

          <!-- formulaire de contact -->
          <div class="col-md-6">

            {!! Form::open(['route' => 'nous-contacter','method' => 'post','class' => 'form-group', 'id' => 'contactUsAjax']) !!}

            <div class="form-group">
              {!! Form::label('nom', 'Nom *', ['class' => 'col-md-6 control-label']) !!}
              {!! Form::text('nom',null,['class' => 'form-control','placeholder' => 'votre nom']) !!}
              {{-- {!! $errors->first('nom', '<small class="help-block">:message</small><br />') !!} --}}
            </div>
            <small class="help-block nom"></small>

            <div class="form-group">
              {!! Form::label('email', 'Adresse E-Mail *', ['class' => 'col-md-6 control-label']) !!}
              {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'votre email']) !!}
              {!! $errors->first('email', '<small class="help-block">:message</small><br />') !!}
            </div>
            <small class="help-block email"></small>

            <div class="form-group">
              {!! Form::label('sujet', 'Sujet *', ['class' => 'col-md-6 control-label']) !!}
              {!! Form::text('sujet',null,['class' => 'form-control','placeholder' => 'votre sujet']) !!}
              {!! $errors->first('sujet', '<small class="help-block">:message</small><br />') !!}
            </div>
            <small class="help-block sujet"></small>

            <div class="form-group">
              {!! Form::label('message', 'Message *', ['class' => 'col-md-6 control-label']) !!}
              {!! Form::textarea('message',null,['class' => 'form-control','placeholder' => 'votre message']) !!}
              {!! $errors->first('message', '<small class="help-block">:message</small><br />') !!}
            </div>
            <small class="help-block message"></small>

            {!! Form::submit('Envoyez votre message',['class' => 'btn btn-primary']) !!}
            {!! Form::button( '', ['class' => 'spinner']) !!}
            {!! Form::close() !!}
          </div>
        </div>
    </div>



  </section> <!-- end section paragraphes -->
  <div class="clearfix"></div> <!-- classe clear pour fixer div aside -->
</main> <!-- end container -->


  @section('js')
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })
    </script>

      <script type="text/javascript">
        $('#contactUsAjax').on('submit', function(e){

          // $(".btn-primary").on('click', function(){
          //
          //   $(".btn-primary").css("display","none");
          //
          // });
          e.preventDefault();

          var form = $('#contactUsAjax');

          $.ajax({
            type: 'POST',
            url: "{{ route('nous-contacter') }}",
            data: form.serialize(),
            dataType: "json",

            beforeSend: function(){
                $('.btn-primary').css("display","none");
                $('.spinner').css('display','block').html('<i class="fas fa-spinner fa-spin"></i>')
            },
            success:function(response){

              $('.spinner').css("display", "none");
              $('.btn-primary').css("display","block");
              if(response.errStatus !== true) {

                $('.containerForm').css("display","none");

                $('.redirect').css('display','block').html(response.html);

                $('.nom').html('');
                $('.email').html('');
                $('.sujet').html('');
                $('.message').html('');

              }
              else {

                $('.nom').html(response.nom);
                $('.email').html(response.email);
                $('.sujet').html(response.sujet);
                $('.message').html(response.message);

              }

            }
          });
        });
      </script>
  @endsection
@endsection
