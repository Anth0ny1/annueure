<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [];

        $users[] = array(
          'name' => 'Anthony',
          'lastname' => 'Antho',
          'city' => 'Beuzeville',
          'email' => 'anthony@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Loic',
          'lastname' => 'Gourdeau',
          'city' => 'Evreux',
          'email' => 'loic@mail.com',
          'role' => 'membre',
          'password' => bcrypt('123456'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'admin',
          'lastname' => 'admin',
          'city' => 'Paris',
          'email' => 'admin@mail.com',
          'role' => 'admin',
          'password' => bcrypt('admin'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Quidel',
          'lastname' => 'antoine',
          'city' => 'Pont audemer',
          'email' => 'quidelantoine@gmail.com',
          'role' => 'admin',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Andresienne',
          'lastname' => 'julien',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'sarlsma@wanadoo.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Courvilloise',
          'lastname' => 'sebastien',
          'city' => 'Courville-sur-Eure',
          'email' => 'contact@lacharpente-courvilloise.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Treuil',
          'lastname' => 'romain',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'treuil@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Letac',
          'lastname' => 'Dominique',
          'city' => 'Evreux',
          'email' => 'letac@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Lainé',
          'lastname' => 'Alain',
          'city' => 'Pacy-sur-Eure',
          'email' => 'laine2@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'boulay',
          'lastname' => 'robert',
          'city' => 'Émalleville',
          'email' => 'charpente.jmtrois@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Leroy',
          'lastname' => 'Pascal',
          'city' => 'Gravigny',
          'email' => 'leroy.pascal@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Fresnais',
          'lastname' => 'henry',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'fresnais2@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'masset',
          'lastname' => 'pierre',
          'city' => 'Notre-Dame-de-l\'Isle',
          'email' => 'masset@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'cipp',
          'lastname' => 'michelle',
          'city' => 'Méré',
          'email' => 'cipp2@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'DUCHESNE',
          'lastname' => 'bernard',
          'city' => 'Verneuil-sur-Avre',
          'email' => 'duchesne2@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Larchevêque',
          'lastname' => 'Christophe',
          'city' => 'Rougemontiers',
          'email' => 'larcheveque@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Larchevêque',
          'lastname' => 'Christophe',
          'city' => 'Rougemontiers',
          'email' => 'larcheveques@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Brunet',
          'lastname' => 'Christophe',
          'city' => 'Crosville-la-Vieille',
          'email' => 'brunet@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'elmec',
          'lastname' => 'quentin',
          'city' => 'Pont-Audemer',
          'email' => 'elecnormandie@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'acedec',
          'lastname' => 'robert',
          'city' => 'Normanville',
          'email' => 'example2@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Aulney',
          'lastname' => 'hervé',
          'city' => 'La Haye-de-Calleville',
          'email' => 'aulney@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Lebellois',
          'lastname' => 'fabrice',
          'city' => 'Saint-Symphorien',
          'email' => 'lebellois@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Gedibois',
          'lastname' => 'frederique',
          'city' => 'Saint-Beuzeville',
          'email' => 'gedibois@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Eure-menuiserie',
          'lastname' => 'frederique',
          'city' => 'Les Damps',
          'email' => 'deshaies@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Peltier Menuiserie Sarl',
          'lastname' => 'frederique',
          'city' => 'Villemeux-sur-Eure',
          'email' => 'peltier@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'JP Plomberie',
          'lastname' => 'frederique',
          'city' => 'Rougemontiers',
          'email' => 'jp@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'C.e.p.s Sces Vasseur',
          'lastname' => 'frederique',
          'city' => 'Le Neubourg',
          'email' => 'vasseur@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'SARL Ledein Pascal',
          'lastname' => 'frederique',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'ledein@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Mural\'Gaz',
          'lastname' => 'frederique',
          'city' => 'Normanville',
          'email' => 'gaz@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Jaffre Thierry',
          'lastname' => 'Thierry',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'jaffre@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Sc couvreur',
          'lastname' => 'scam',
          'city' => 'Pacy-sur-Eure',
          'email' => 'scam@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Cognard Christophe',
          'lastname' => 'Christophe',
          'city' => 'Heudebouville',
          'email' => 'cognard.christophe@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        $users[] = array(
          'name' => 'Bance Philippe',
          'lastname' => 'Philippe',
          'city' => 'Écardenville-sur-Eure',
          'email' => 'bance.philippe@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Thierry Romero',
          'lastname' => 'Thierry',
          'city' => 'Grandvilliers',
          'email' => 'thierry.romero@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Meslin',
          'lastname' => 'henry',
          'city' => 'Crosville-la-Vieille',
          'email' => 'meslin@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Leite',
          'lastname' => 'philippe',
          'city' => 'Saint-André-de-l\'Eure',
          'email' => 'leite@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Banas',
          'lastname' => 'Frederic',
          'city' => 'Authou',
          'email' => 'banas.frederic@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Malbranche',
          'lastname' => 'Guy-François',
          'city' => 'Lieurey',
          'email' => 'guy.françois@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'rotin',
          'lastname' => 'Guy',
          'city' => 'Buis Sur Damville',
          'email' => 'rotin@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Defontaine',
          'lastname' => 'Grégory',
          'city' => 'Courbépine',
          'email' => 'defontaine@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'SAUL',
          'lastname' => 'Steeve',
          'city' => 'Les Ventes',
          'email' => 'steeve.saul@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'LUCAS',
          'lastname' => 'thierry',
          'city' => 'Bernay',
          'email' => 'lucas@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'ROUSSELLE',
          'lastname' => 'Alain',
          'city' => 'Saint-Pierre-la-Garenne',
          'email' => 'alain.rousselle@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'ROUSS',
          'lastname' => 'hervé',
          'city' => 'Sainte-Marthe',
          'email' => 'msb.sas@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Blin',
          'lastname' => 'Marcel',
          'city' => 'La Bonneville-sur-Iton',
          'email' => 'blin.marcel@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Simon',
          'lastname' => 'francois',
          'city' => 'Le Bosc-Roger-en-Roumois',
          'email' => 'simon@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'pimon',
          'lastname' => 'sebastien',
          'city' => 'Louviers',
          'email' => 'pimon@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'herdans',
          'lastname' => 'bastien',
          'city' => 'Heudebouville',
          'email' => 'herdans@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'malheux',
          'lastname' => 'michel',
          'city' => 'Épaignes',
          'email' => 'malheux@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'ssement',
          'lastname' => 'jean-louis',
          'city' => 'Émalleville',
          'email' => 'ssement@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'medal',
          'lastname' => 'louis-philippe',
          'city' => 'Pacy-sur-Eure',
          'email' => 'medal@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'duthe',
          'lastname' => 'Franck',
          'city' => 'Louviers',
          'email' => 'duthe@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'lapin',
          'lastname' => 'pierre',
          'city' => 'Évreux',
          'email' => 'lapin@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'karmowski',
          'lastname' => 'Alexis',
          'city' => 'Vatteville',
          'email' => 'karmowski@gmail.com',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'prunier',
          'lastname' => 'julie',
          'city' => 'EPAIGNES',
          'email' => 'prunier_julie@yahoo.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Jeanjan',
          'lastname' => 'Clémence',
          'city' => 'Moulineaux',
          'email' => 'contact@clemence-decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'Monnier',
          'lastname' => 'julie',
          'city' => 'Livet-sur-Authou',
          'email' => 'monnier@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'danier',
          'lastname' => 'Virginie',
          'city' => 'Épreville-prés-le-Neubourg',
          'email' => 'danier@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'mongin',
          'lastname' => 'Matthieu',
          'city' => 'Vernon',
          'email' => 'mongin@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'raunnin',
          'lastname' => 'Matthieu',
          'city' => 'Neauphlette',
          'email' => 'raunnin@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'ninbus',
          'lastname' => 'Matthieu',
          'city' => 'Quetteville',
          'email' => 'ninbus@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'gennetey',
          'lastname' => 'bernard',
          'city' => 'Saint-Léger-du-Gennetey',
          'email' => 'gennetey@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'perdrix',
          'lastname' => 'sebastien',
          'city' => 'Cormeilles',
          'email' => 'perdrix@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'collin',
          'lastname' => 'Tristan',
          'city' => 'Nonancourt',
          'email' => 'collin@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'vaux',
          'lastname' => 'Tristan',
          'city' => 'Senonches',
          'email' => 'vaux@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'gros',
          'lastname' => 'patrick',
          'city' => 'Bernay',
          'email' => 'gros@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'tros',
          'lastname' => 'patrick',
          'city' => 'Incarville',
          'email' => 'tros@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );
        $users[] = array(
          'name' => 'vraider',
          'lastname' => 'henry',
          'city' => 'evreux',
          'email' => 'vraider@decoration.fr',
          'role' => 'membre',
          'password' => bcrypt('michel'),
          'created_at' => Carbon::now()
        );

        DB::table('users')->insert($users);

    }
}
