@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mes-societes.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" /> --}}
@endsection

@section('title')
  Profil : vos sociétés
@endsection

@section('content')

<main id="mainContainerPage">
  <!-- Sidebar left (gauche) à mettre dans le header commun pour les pages-->
  <aside class="sidebarLeft">
      <div class="pictoSidebarLeft picto-box">
        <ul>
          <li>
            <a href="#">{!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}
            </a>
            <p class="labelPicto">Annuaire des Pro</p>
          </li>
          <li>
            <a href="#">{!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}
            </a>
            <p class="labelPicto">Inscription des Pro</p>
          </li>
          <li>
            <a href="#">{!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}
            </a>
            <p class="labelPicto">Prendre un rendez-vous</p>
          </li>
          <li>
            <a href="#">{!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
            </a>
            <p class="labelPicto">Demander un devis</p>
          </li>
        </ul>
      </div>
  </aside>

  <div class="mainContentRight">
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

          @foreach ($mysociety as $mysoc)
      {{-- {{dd($mycategory2)}} --}}

              <section class="SectionFichesSte">
                <div class="fichePresentSte">
                  <div class="logoBoxSte">
                      @if (!empty($mysoc->path))
                        <img class="ImglogoSte" src="{{ Image::url( route ('home') . '/' . $mysoc->path . '/' . $mysoc->image_name,100,100,array('crop','grayscale'))}}" alt="">
                      @else
                        {!! file_get_contents( asset('img/logo/logo-annueure-temporaire.svg')) !!}
                      @endif
                  </div>
                    <h2>{{$mysoc->name_society}}</h2>
                  <p class="textFichSte">
                    <i class="fas fa-user"></i> : Mme/M. @php echo ucfirst( $mysoc->gerant)@endphp</p>
                  <p class="textFichSte">
                    <i class="fas fa-address-card"></i> : {{$mysoc->adress}}</p>
                  <p class="textFichSte">
                    <i class="fas fa-map-marker-alt"></i> : {{$mysoc->zip_code}} - @php echo ucfirst( $mysoc->city)@endphp</p>
                  <p class="textFichSte">
                    <i class="fas fa-phone-square"></i> : {{$mysoc->phone}}</p>
                  <p class="textFichSte">
                    <i class="fas fa-globe"></i> : {{$mysoc->site_web}}</p>
                  <p class="textFichSte">
                    <i class="fas fa-envelope"></i> : {{$mysoc->email}}</p>
                  <p class="textFichSte">Siren : {{$mysoc->siren}}</p>
                  <p class="textFichSte description">Description : </p>
                  <p class="textFichSte">{{$mysoc->skills}}</p>
                  <div class="linkBtn">
                    <a class="btn btn-round btn-primary" href="{{ route('update-societes',['id' => $mysoc->id])}}">modifier</a>
                    {!! Form::open(['route' => ['delete-societes', $mysoc->id],  'method' => 'delete']) !!}
                    {!! Form::submit('Delete',['class' => 'btn btn-round btn-danger']) !!}
                    {!! Form::close() !!}
                  </div>
                </div>
              </section>

          @endforeach

  </div>
</main>

@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

@endsection
