@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mes-societes.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" /> --}}
@endsection

@section('title')
  Profil société
@endsection

@section('content')
  <div class="textePresentation">  <!-- texte banniére verte de présentation -->
    @if ($mycountsociety == 0)
      <h2>Aucune société d'enregistrée </h2>

    @elseif ($mycountsociety == 1)
        <h2>Vous avez {{$mycountsociety}} sociétés d'inscrite</h2>
        @else
          <h2>Voici mes {{$mycountsociety}} sociétés inscrites</h2>
    @endif
  </div>
  <div>  <!-- container -->
    <aside class="asidePresentation"> <!-- left aside -->
      <div class="pictoPresentation">
        <ul>

          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-annuaire.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-inscription.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-rendez-vous.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('admin/svg/picto-devis.svg')) !!}</a></li>
        </ul>
      </div>
    </aside> <!-- end left aside -->





<div class="display">

    @foreach ($mysociety as $mysoc)
{{-- {{dd($mycategory2)}} --}}

      <section class="template-sct">
          <div class="presentation-profil-sct">

            @if (!empty($mysoc->path))
            <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $mysoc->path . '/' . $mysoc->image_name,50,50,array('crop','grayscale'))}}" alt="">
            @else
              <img class="logo-sct" src="{{ Image::url(  route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',50,50,array('crop'))}}" alt="">
            @endif
            <hr>
            <h2>{{$mysoc->name_society}}</h2>
            {{-- @foreach ($mycategory2 as $mycat)
              <h3>{{$mycat->categorie_name}}</h3>
            @endforeach --}}
          <p>Nom du gérant : {{$mysoc->gerant}}</p>
          <p>Adresse : {{$mysoc->adress}}</p>
          <p>Ville : {{$mysoc->city}}</p>
          <p>Code postal : {{$mysoc->zip_code}}</p>
          <p>Téléphone : {{$mysoc->phone}}</p>
          <p>site_web : {{$mysoc->site_web}}</p>
          <p>E-mail : {{$mysoc->email}}</p>
          <p>Numéro siren : {{$mysoc->siren}}</p>
          <p>Description : <br>{{$mysoc->skills}}</p>
          <div class="link">
          <a class="btn btn-round btn-primary" href="{{ route('update-societes',['id' => $mysoc->id])}}">modifier</a>
          {!! Form::open(['route' => ['delete-societes', $mysoc->id],  'method' => 'delete']) !!}
          {!! Form::submit('Delete',['class' => 'btn btn-round btn-danger']) !!}
          {!! Form::close() !!}
      </div>
        </div>
      </section>

    @endforeach

  </div>

  </div>
@endsection
