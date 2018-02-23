@extends('layouts/layout')

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/mes-societes.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/annuaire-profil.css') }}" /> --}}
@endsection

@section('title')
  Profil : vos sociétés
@endsection

@section('content')


<!-- Container principal -->
<main id="mainContainerPage">

  <!-- Sidebar left (gauche) -->
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
        @if ($mycountsociety == 0)
          <h1 id="titlePageInt">Aucune société enregistrée dans votre profil</h1>
        @elseif ($mycountsociety == 1)
            <h1 id="titlePageInt">Vous avez {{$mycountsociety}} société inscrite</h1>
            @else
              <h1 id="titlePageInt">Vous avez {{$mycountsociety}} sociétés inscrites</h1>
        @endif

        @if (session('success'))
          <div class="alert alert-success clearfix width100">
            {{ session('success') }}
          </div>
        @endif

        @if (session('danger'))
          <div class="alert alert-danger clearfix width100">
            {{ session('danger') }}
          </div>
        @endif

      @if ($mycountsocietymoder == 0)
      @elseif ($mycountsocietymoder == 1)
          <div class="alert alert-success clearfix width100">vous avez {{$mycountsocietymoder}} societé en attente de validation.</div>
        @elseif (($mycountsocietymoder > 1))
          <div class="alert alert-success clearfix width100">vous avez {{$mycountsocietymoder}} societés en attente de validation.</div>
      @endif

      <section class="SectionFichesSte">
          @foreach ($mysociety as $mysoc)

            @if ($mysoc->moderation != 'new')
                <div class="fichePresentSte">
                  <div class="logoBoxSte">
                      @if (!empty($mysoc->path))
                        <img class="ImglogoSte" src="{{ Image::url( route ('home') . '/' . $mysoc->path . '/' . $mysoc->image_name,100,100,array('crop','grayscale'))}}" alt="">
                      @else
                        {!! file_get_contents( asset('img/logo/logo-annueure-temporaire.svg')) !!}
                      @endif
                  </div>

                    <h2>{{$mysoc->name_society}}</h2>
                      @if ($mysoc->moderation == 'non conforme')
                      <h3 style="color:red;">non conforme</h3>
                      @endif
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

            @endif

          @endforeach
        </section>

        </section>
  </div>
</main>

@endsection
@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

@endsection
