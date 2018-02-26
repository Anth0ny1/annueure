@extends('layouts/layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/contactus.css') }}" />
@endsection
@section('title')
  Nous contacter
@endsection

@section('content')
  <div class="textePresentation">
  <h1 id="titlePageInt">Nous contacter</h1>
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

    {{-- @include('layouts.front.sidebarLeft') --}}
<div class="container center_div">
<div class="panel-body">

<div class="redirect">

</div>
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

    {!! Form::submit('Envoyez votre message',['class' => 'btn-primary']) !!}
    {!! Form::close() !!}
  </div>

  </div>
</div>
  @section('js')
    <scriptsrc="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })
    </script>

      <script type="text/javascript">
        $('#contactUsAjax').on('submit', function(e){

          e.preventDefault();
          var form = $('#contactUsAjax');

          $.ajax({
            type: 'POST',
            url: "{{ route('nous-contacter') }}",
            data: form.serialize(),
            dataType: "json",

            beforeSend: function(){
                console.log('before');
                console.log(form.serialize());
            },
            success:function(response){
              console.log('after');
              console.log(response);
              if(response.errStatus !== true) {
                console.log('if');
                // console.log(response);
                $('.nom').html('');
                $('.email').html('');
                $('.sujet').html('');
                $('.message').html('');
                // $('.redirect').html(response.redirect);
                // window.location.href = "http://localhost/annueure/public/";
              }
              else {
                console.log('else');

                $('.nom').html(response.error.nom);
                $('.email').html(response.error.email);
                $('.sujet').html(response.error.sujet);
                $('.message').html(response.error.message);
              }
              // $('#afficherUser').html(response.v);
            }
          });

          // console.log('michel');
        });
      </script>
  @endsection
@endsection
