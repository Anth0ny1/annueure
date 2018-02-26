@extends('layouts/layout')

@section('title')
  Présentation projet annu'eure
@endsection

@section('content')

  <!-- Container principal -->
  <main id="mainContainerPage">

  <!-- Sidebar left (gauche) -->
  @include('layouts.front.sidebarLeft')

    <!-- section principale (droite) -->
    <section class="mainContentRight">

        <h1 id="titlePageInt">Présentation de Annu'Eure</h1>
        <div class="boxPresent">
          <h5 class="pgPresent">
            <strong>Pourquoi Annu'Eure ?</strong>
          </h5>
          <p class="txtPresent">Le site Internet <strong>Annu'Eure</strong> a été développé dans le cadre d'un projet de soutenance présenté à la fin de la formation professionnelle <em class="italic">"Codeur développeur"</em> de <a href="http://www.wf3.fr/" target="_blank">WebForce3</a> à Épaignes, en partenariat avec la <a href="http://www.eure.cci.fr/" target="_blank">Chambre de Commerce et d'Industrie (CCI) de l'Eure</a>.</p>
          <p class="txtPresent">Les apprenants ont présenté un projet de réalisation d'un site web développé avec le frameworks <a href="https://laravel.com/" target="_blank">Laravel</a>.</p>
          <p class="txtPresent">L'objectif au terme de cet examen est l'obtention de la certification <em class="italic">"web développeur junior"</em> par l'apprentissage de techniques et d'outils qui permettent de mener à bien le développement d'un projet Web complexe et d'en comprendre toutes les subtilités.</p>
          <h5 class="pgPresent">
            <strong>Pour qui Annu'Eure ?</strong>
          </h5>
          <p class="txtPresent">Ce site est dédié aux particuliers qui recherchent un professionnel ou un artisan du bâtiment proche de chez eux, ainsi qu'aux professionnels qui souhaitent s'inscrire sur un annuaire spécialisé pour gagner en visibilité.</p>
          <h5 class="pgPresent">
            <strong>Comment Annu'Eure ?</strong>
          </h5>
          <p class="txtPresent">Technologies et langages utilisés pour développer <strong>Annu'Eure</strong> : </p>
          <ul class="listPgPresent">
            <li>
              Langage de balisage <a href="https://developer.mozilla.org/fr/docs/Web/Guide/HTML/HTML5" target="_blank">HTML5</a> (HTML 5.2),
            </li>
            <li>
              Langage de présentation et de styles <a href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank">CSS3,</a>
            </li>
            <li>
              Serveur HTML <a href="http://www.apache.org/" target="_blank">Apache,</a>
            </li>
            <li>
              Serveur de données <a href="https://mariadb.org/" target="_blank">MariaDB</a> (MySQL),
            </li>
            <li>
              Langage de programmation objet <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank">PHP</a> 7.2.x,
            </li>
            <li>
              Frameworks <a href="https://laravel.com/" target="_blank">Laravel 5.4,</a>
            </li>
            <li>
              Mini-frameworks <a href="http://jquery.com/" target="_blank">JQuery</a> 3.x (javascript),</li>
            <li>
              Mini-Frameworks <a href="http://jquery.com/" target="_blank">Boostrap</a> 4.x (CSS),
            </li>
            <li>
              Librairie JS <a href="http://flexslider.woothemes.com/" target="_blank">Flexslider 2</a>,
            </li>
            <li>
              Langage de programmation asynchrone <a href="https://developer.mozilla.org/fr/docs/Web/Guide/AJAX" target="_blank">Ajax</a>,
            </li>
            <li>
              Langage structuré de requêtes <a href="http://sql.sh/" target="_blank">SQL</a>,
            </li>
            <li>
              API <a href="https://developers.google.com/maps/" target="_blank">Google Maps</a>,
            </li>
            <li>
              Format de données de syndication <a href="https://fr.wikipedia.org/wiki/RSS" target="_blank">RSS 2</a> (XML).
            </li>
          </ul>
          <h5 class="pgPresent">
            <strong>Et après ?</strong>
          </h5>
          <p class="txtPresent">Pour le moment, ce site est en version bêta-test, mais nous souhaiterions le mettre en ligne et poursuivre son développement. Pour ce faire nous aurions besoin de financer au moins l'hébergement et la maintenance technique du site. Tout don, même minime, serait le bienvenue et nous inviterons les utilisateurs à participer au financement du site Annu'Eure via le financement participatif.</p>
        </div>
      </section> <!-- end section paragraphes -->
      <div class="clearfix"></div> <!-- classe clear pour fixer div aside -->
  </main> <!-- end container -->

@endsection
