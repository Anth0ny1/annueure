<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocietyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
      $society = [];
      $date = Carbon::now();

      $society[] = array(
        'user_id'        => 1,
        'name_society'       => 'nom de la societe',
        'gerant'       => 'gerant',
        'adress'    => 'route des champs ',
        'city'        => 'Paris',
        'zip_code'        => '75000',
        'phone'        => '0232324324',
        'site_web'        => 'societe2.com',
        'skills'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ',
        'email'        => 'example1@gmail.com',
        'siren'        => 123456789,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'nom de la societe2',
        'gerant'       => 'gerant1',
        'adress'    => 'route des poules ',
        'city'        => 'Evreux',
        'zip_code'        => '75000',
        'phone'        => '0232434324',
        'site_web'        => 'societe1.com',
        'skills'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ',
        'email'        => 'example3@gmail.com',
        'siren'        => 623456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Sarl Menuiserie Andresienne',
        'gerant'       => 'Mr Andresienne',
        'adress'    => '11 Rue Jules Cayaux',
        'city'        => 'Saint-André-de-l\'Eure',
        'zip_code'        => '27220',
        'phone'        => '0232375921',
        'site_web'        => 'http://www.menuiserie-andresienne.com/',
        'skills'        => 'Artisan Menuisier à St André de L\'Eure (27) depuis 1995, 20 années d\'expérience professionnelle.',
        'email'        => 'sarlsma@wanadoo.fr',
        'siren'        => 401640750,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'SARL LA CHARPENTE COURVILLOISE ',
        'gerant'       => 'Mr Courvilloise',
        'adress'    => '7 Rue de Châteauneuf',
        'city'        => 'Courville-sur-Eure',
        'zip_code'        => '28190',
        'phone'        => '0237232059',
        'site_web'        => 'http://www.lacharpente-courvilloise.com/',
        'skills'        => 'charpentier à Courville-sur-Eure? Jean-Louis Rouvet vous propose ses services pour la construction de maison ossature en bois.',
        'email'        => 'contact@lacharpente-courvilloise.com',
        'siren'        => 411018864,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Treuil Sa',
        'gerant'       => 'Mr Treuil',
        'adress'    => 'Rue de Jumelles',
        'city'        => 'Saint-André-de-l\'Eure',
        'zip_code'        => '27220',
        'phone'        => '0232379571',
        'site_web'        => 'https://www.tmb-treuil.fr/',
        'skills'        => 'Créée en 1983 sous l\'égide du groupe Treuil, la société TMB est spécialisée dans les travaux du bois.',
        'email'        => 'treuil@gmail.com',
        'siren'        => 456738901,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Letac Dominique',
        'gerant'       => 'gerant1',
        'adress'    => '175 Le Bout d\'Amont',
        'city'        => 'Evreux',
        'zip_code'        => '27680',
        'phone'        => '0232576310',
        'site_web'        => 'http://www.couvreur-charpentier-eure.fr/',
        'skills'        => 'Situés au Marais-Vernier près de Pont-Audemer.',
        'email'        => 'letac@gmail.com',
        'siren'        => 787456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Alain Lainé',
        'gerant'       => 'Mr Lainé',
        'adress'    => 'Rue du Camping',
        'city'        => 'Pacy-sur-Eure',
        'zip_code'        => '27120',
        'phone'        => '0232360206',
        'site_web'        => 'http://www.menuiserie-laine.fr/',
        'skills'        => 'Depuis 1954, ALAIN LAINE MENUISERIE charpentier ébéniste de père en fils.',
        'email'        => 'laine2@gmail.com',
        'siren'        => 703456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Charpente Menuiserie Rénovation JM3',
        'gerant'       => 'Mr boulay',
        'adress'    => '2 Rue du Boulay',
        'city'        => 'Émalleville',
        'zip_code'        => '27930',
        'phone'        => '0232347036',
        'site_web'        => 'http://maison-ossature-bois-eure.over-blog.com/',
        'skills'        => 'Entreprise du bâtiment de l\'Eure proche Evreux spécialisée dans la charpente traditionnelle',
        'email'        => 'charpente.jmtrois@gmail.com',
        'siren'        => 365456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Leroy Pascal',
        'gerant'       => 'Mr leroy',
        'adress'    => '14 Rue des Coquelicots',
        'city'        => 'Gravigny',
        'zip_code'        => '27930',
        'phone'        => '0232331717',
        'site_web'        => 'http://www.charpente-menuiserie-leroypascal.fr/',
        'skills'        => 'Depuis 1985 Pascal Leroy exerce le métier de charpentier et menuisier d\'extérieur.',
        'email'        => 'leroy.pascal@gmail.com',
        'siren'        => 198456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Fresnais Store et Fermetures',
        'gerant'       => 'Mr Fresnais',
        'adress'    => '5 Rue du Clos Bourdin',
        'city'        => 'Saint-André-de-l\'Eure',
        'zip_code'        => '27220',
        'phone'        => '0232331076',
        'site_web'        => 'http://www.fresnais-store-et-fermetures-ouvertures.com/',
        'skills'        => 'Installés près de chez vous, c’est avec grand plaisir que nous participerons à l’élaboration de votre projet de fenêtres, de portes, de volets ou de portails.',
        'email'        => 'fresnais2@gmail.com',
        'siren'        => 835656321,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'A2CM Masset',
        'gerant'       => 'Mr masset',
        'adress'    => '8 Rue Mauger, Pressagny le bal',
        'city'        => 'Notre-Dame-de-l\'Isle',
        'zip_code'        => '27940',
        'phone'        => '0232534552',
        'site_web'        => 'http://www.entreprise-masset.com/',
        'skills'        => 'L\'Entreprise A2CM Masset se situe à Notre Dame de l\'Isle près de Vernon dans l\'Eure.',
        'email'        => 'masset@gmail.com',
        'siren'        => 906856787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Ets CIPP',
        'gerant'       => 'Mr Cipp',
        'adress'    => 'route des poules ',
        'city'        => 'Méré',
        'zip_code'        => '27600',
        'phone'        => '0660302465',
        'site_web'        => 'http://www.cipp-electricite78.fr/',
        'skills'        => '11 ans d\'expérience à votre service pour les professionnels et les particuliers. Nous vous conseillons pour répondre à vos attentes',
        'email'        => 'cipp2@gmail.com',
        'siren'        => 593656787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'SARL DUCHESNE ELECTRICITE',
        'gerant'       => 'gerant1',
        'adress'    => 'Rue du Moulin à Tan',
        'city'        => 'Verneuil-sur-Avre',
        'zip_code'        => '27130',
        'phone'        => '0232434324',
        'site_web'        => 'http://www.duchesne-electricite.com/',
        'skills'        => 'Crée en 1978 la SARL Duchesne Electricité accompagne ses clients dans la réalisation et la maintenance de leurs installations électriques.',
        'email'        => 'duchesne2@gmail.com',
        'siren'        => 123451122,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'ECL Electricité Christophe Larchevêque',
        'gerant'       => 'gerant1',
        'adress'    => '6 Rue des Trottiers',
        'city'        => 'Rougemontiers',
        'zip_code'        => '27350',
        'phone'        => '0649378553',
        'site_web'        => 'societe8.com',
        'skills'        => 'Entreprise d\'électricité, nous réaliserons vos devis',
        'email'        => 'larcheveques@gmail.com',
        'siren'        => 658936787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'nom de la societe2',
        'gerant'       => 'gerant1',
        'adress'    => 'route des poules ',
        'city'        => 'Evreux',
        'zip_code'        => '75000',
        'phone'        => '0232434324',
        'site_web'        => 'societe1.com',
        'skills'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ',
        'email'        => 'example5@gmail.com',
        'siren'        => 393456787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'BRUNET BATAILLE',
        'gerant'       => 'Mr Brunet',
        'adress'    => 'Rue Jean Petit, ZA Le Haut du Val 2',
        'city'        => 'Crosville-la-Vieille',
        'zip_code'        => '27110',
        'phone'        => '0232356464',
        'site_web'        => 'http://www.brunet-groupe.fr/',
        'skills'        => 'En génie électrique, génie thermique et courants faibles, BRUNET assure l’installation, le dépannage et la maintenance.',
        'email'        => 'brunet@gmail.com',
        'siren'        => 167846787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Yd Elec Normandie',
        'gerant'       => 'mr elmec',
        'adress'    => '36 Route de Saint-Mards',
        'city'        => 'Pont-Audemer',
        'zip_code'        => '27500',
        'phone'        => '0232413828',
        'site_web'        => 'http://www.ydelecnormandie.com/',
        'skills'        => 'Nous disposons d’une équipe d’électriciens habiles et expérimentés. Nos prestations consistent à installer, dépanner ou rénover le réseau électrique de votre bâtiment.',
        'email'        => 'elecnormandie@gmail.com',
        'siren'        => 923456349,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'ACDC Electricité',
        'gerant'       => 'Mr acedec',
        'adress'    => '7 Lotissement la Pommeraie',
        'city'        => 'Normanville',
        'zip_code'        => '27930',
        'phone'        => '0686259961',
        'site_web'        => 'http://www.acdc-electricite-evreux-27.fr/',
        'skills'        => 'Artisan électricien intervenant dans un rayon de 30 kms autour d\'Evreux.Pas de doute ! Nous trouverons ensemble la solution adaptée à votre projet.',
        'email'        => 'example2@gmail.com',
        'siren'        => 746352787,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Aulney Fils',
        'gerant'       => 'Mr Aulney',
        'adress'    => '30 Rue des Canadiens',
        'city'        => 'La Haye-de-Calleville',
        'zip_code'        => '27800',
        'phone'        => '0232443480',
        'site_web'        => 'http://www.aulneyfils-electricite-brionne.fr/plan',
        'skills'        => 'L\'entreprise Aulney Fils est située à proximité de la mairie de la commune de La Haye-de-Calleville, dans le département de l\'Eure, en région Haute-Normandie.',
        'email'        => 'aulney@gmail.com',
        'siren'        => 923456782,
        'created_at'  => $date
      );
      $society[] = array(
        'user_id'        => 2,
        'name_society'       => 'Lebellois Electrcite Generale',
        'gerant'       => 'Mr Lebellois',
        'adress'    => '185 Chemin du Clos des Champs',
        'city'        => 'Saint-Symphorien',
        'zip_code'        => '27500',
        'phone'        => '0232564964',
        'site_web'        => 'http://www.lebellois-jerome-electricite.fr/%C3%A9lectricite-generale-saint-symphorien',
        'skills'        => 'Depuis 2002, la société Lebellois Électricité, située à St-Symphorien et possédant un atelier à Epaignes',
        'email'        => 'lebellois@gmail.com',
        'siren'        => 836456787,
        'created_at'  => $date
      );


      DB::table('society')->insert($society);


  }

}
