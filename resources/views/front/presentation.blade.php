@extends('layouts/layout')

@section('title')
  Page de presentation
@endsection

@section('content')

  <div class="textePresentation">  <!-- texte banniére verte de présentation -->
    <h2>Présentation de Annu'Eure</h2>
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
      <section class="sectionPresentation"> <!-- section paragraphes -->
        <div class="paragraphePresentation">
          <h5><strong>Pourquoi Annu'Eure ?</strong> :</h5>
          <p>Dans le cadre de la formation WebForce3 avec la CCI de l'Eure, et du projet de notre soutenance finale
          les apprenants ont un projet de réalisation d'un site web développé avec un frameworks
          notre objectif au terme de cet examen est de maîtriser les techniques et les outils qui permettent de mener
          le développement d'un projet Web complexe et d'en comprendre les subtilités.</p><br />
          <h5><strong>Pour qui Annu'Eure ?</strong> :</h5>
          <p>Ce site est dédié aux particuliers qui recherchent un professionnel du bâtiment proche de chez eux
          et aussi aux professionnels qui souhaitent s'inscrire sur un annuaire pour gagner en visibilité.</p><br />
          <h5><strong>Financement participatif</strong> :</h5>
          <p>Ce site pour le moment est en version beta(test) mais nous souhaiterions le mettre en ligne
          pour ce faire nous aurions besoin de fonds pour l'hébergement et la maintenance du site,
          envoyez vos dons a l'adresse suivante: thekingofpizzas@gmail.com</p>
        </div>
      </section> <!-- end section paragraphes -->
      <div class="clear"></div> <!-- classe clear pour fixer div aside -->
    </div> <!-- end container -->

@endsection
