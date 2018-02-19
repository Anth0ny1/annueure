@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mes-societes.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" /> --}}
@endsection

@section('title')
  Profil : vos sociétés
@endsection

@section('content')

<main id="profilSociete">
  <!-- Sidebar left (gauche) à mettre dans le header commun pour les pages-->
  <aside class="sidebarContent">
    <!-- annuaire, presentation, nous contacter, nous rejoindre, login -->
      <div class="pictoPresentation picto-box">
        <ul>
          <li><a href="#">{!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}</a></li>
          <li><a href="#">{!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}</a></li>
        </ul>
      </div>
  </aside>

  <div class="pageSociete">
      <!-- texte banniére verte de présentation -->
      <div class="titreContent">
        @if ($mycountsociety == 0)
          <h1>Aucune société enregistrée dans votre profil</h1>

        @elseif ($mycountsociety == 1)
            <h1>Vous avez {{$mycountsociety}} société inscrite</h1>
            @else
              <h1>Vous avez {{$mycountsociety}} sociétés inscrites</h1>
        @endif
      </div>
      <div class="mainContent">

          @foreach ($mysociety as $mysoc)
      {{-- {{dd($mycategory2)}} --}}

              <section class="template-sct">
                <div class="presentation-profil-sct">
                  <div class="logo">
                      @if (!empty($mysoc->path))
                        <img class="logo-sct" src="{{ Image::url(  route ('home') . '/' . $mysoc->path . '/' . $mysoc->image_name,100,100,array('crop','grayscale'))}}" alt="">
                      @else
                        <img class="logo-sct" src="{{ Image::url(  route ('home') . '/upload/logo-annueure-carre-simple-hp_preview.png',100,100,array('crop'))}}" alt="">
                      @endif
                  </div>
                  <div class="textePresentation txtpres2">
                    <h5>{{$mysoc->name_society}}</h5>
                  </div>
                  <p class="p"><i class="fas fa-user"></i> : Mme/M. @php echo ucfirst( $mysoc->gerant)@endphp</p>
                  <p class="p"><i class="fas fa-address-card"></i> : {{$mysoc->adress}}</p>
                  <p class="p"><i class="fas fa-map-marker-alt"></i> : {{$mysoc->zip_code}} - @php echo ucfirst( $mysoc->city)@endphp</p>
                  <p class="p"><i class="fas fa-phone-square"></i> : {{$mysoc->phone}}</p>
                  <p class="p"><i class="fas fa-globe"></i> : {{$mysoc->site_web}}</p>
                  <p class="p"><i class="fas fa-envelope"></i> : {{$mysoc->email}}</p>
                  <p class="p">Siren : {{$mysoc->siren}}</p>
                  <p class="p description">Description : </p><p class="p">{{$mysoc->skills}}</p>
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

</main>

@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

@endsection
