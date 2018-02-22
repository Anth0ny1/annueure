@extends('layouts/layout')
 @section('css')
 {{-- <link rel="stylesheet" href="{{ asset('css/presentation-projet.css') }}" /> --}}
@endsection
@section('title')
  Présentation projet annu'eure
@endsection

@section('content')

  <!-- Container principal -->
  <main id="mainContainerPage">

    <!-- Sidebar left (gauche) -->
    <aside class="sidebarLeft">
        <div class="pictoSidebarLeft picto-box">
          <ul>
            <li>
              <a href="{{ route('annuaire') }}">{!! file_get_contents( asset('img/picto/picto-annuaire.svg')) !!}
              </a>
              <p class="labelPicto">Annuaire des Pro</p>
            </li>
            <li>
              <a href="{{ route('register') }}">{!! file_get_contents( asset('img/picto/picto-inscription.svg')) !!}
              </a>
              <p class="labelPicto">Inscription des Pro</p>
            </li>
            <li>
              <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-rendez-vous.svg')) !!}
              </a>
              <p class="labelPicto">Prendre un rendez-vous</p>
            </li>
            <li>
              <a href="{{ route('nous-contacter-view') }}">{!! file_get_contents( asset('img/picto/picto-devis.svg')) !!}
              </a>
              <p class="labelPicto">Demander un devis</p>
            </li>
          </ul>
        </div>
    </aside>

    <!-- section paragraphes -->
    <section class="mainContentRight">
      <!-- <section class="sectionPresent">  -->
        <!-- <h2 class="pgPresent">Présentation de Annu'Eure</h2> -->
        <h1 id="titlePageInt">Présentation de Annu'Eure</h1>
        <div class="boxPresent">
          <h5 class="pgPresent">
            <strong>Pourquoi Annu'Eure ?</strong>
          </h5>
          <p class="txtPresent">Annu'Eure a été développé dans le cadre du projet de soutenance présenté à la fin de la formation WebForce3 en partenariat avec la Chambre de Commerce et d'Industrie (CCI) de l'Eure.</p>
          <p class="txtPresent">Les apprenants ont présenté un projet de réalisation d'un site web développé avec le frameworks Laravel.</p>
          <p class="txtPresent">L'objectif au terme de cet examen est de maîtriser les techniques et les outils qui permettent de mener à bien le développement d'un projet Web complexe et d'en comprendre toutes les subtilités.</p>
          <h5 class="pgPresent">
            <strong>Pour qui Annu'Eure ?</strong>
          </h5>
          <p class="txtPresent">Ce site est dédié aux particuliers qui recherchent un professionnel du bâtiment proche de chez eux ainsi qu'aux professionnels qui souhaitent s'inscrire sur un annuaire pour gagner en visibilité.</p>
          <h5 class="pgPresent">
            <strong>Financement participatif</strong>
          </h5>
          <p class="txtPresent">Ce site pour le moment est en version bêta-test mais nous souhaiterions le mettre en ligne. Pour ce faire nous aurions besoin de fonds pour l'hébergement et la maintenance du site,
          envoyez vos dons à l'adresse du site.</p>
        </div>
      </section> <!-- end section paragraphes -->
      <div class="clearfix"></div> <!-- classe clear pour fixer div aside -->
  </main> <!-- end container -->

@endsection
