<?php

namespace Database\Seeders;

use App\Models\Artisan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtisansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user1 = new User();
        $user1->name = 'ATTIOGBE Didier';
        $user1->phone = '65854478';
        $user1->email = 'didier@gmail.com';
        $user1->role_id = '2';
        $user1->password = bcrypt('didier@gmail.com');
        $user1->profil = 'user.jpg';
        $user1->sexe = 'Masculin';
        $user1->ville_id = '3';
        $user1->adresse = 'Ouando';
        $user1->save();

        $artisan1 = new Artisan();
        $artisan1->user_id = $user1->id;
        $artisan1->name = 'ATTIOGBE Didier';
        $artisan1->phone = '65854478';
        $artisan1->ville_id = '3';
        $artisan1->adresse = 'Ouando';
        $artisan1->Id_number = '12345678';
        $artisan1->categorie_id = '4';
        $artisan1->statuts = '1';
        $artisan1->verified = '1';   

        $user2 = new User();
        $user2->name = 'AMOUSSOU Jordan';
        $user2->phone = '94732932';
        $user2->email = 'jordan@gmail.com';
        $user2->role_id = '2';
        $user2->password = bcrypt('jordan@gmail.com');
        $user2->profil = 'user.jpg';
        $user2->sexe = 'Masculin';
        $user2->ville_id = '3';
        $user2->adresse = 'Ouando';
        $user2->save();

        $artisan2 = new Artisan();
        $artisan2->user_id = $user2->id;
        $artisan2->name = 'AMOUSSOU Jordan';
        $artisan2->phone = '94732932';
        $artisan2->ville_id = '2';
        $artisan2->adresse = 'Zogbadjê';
        $artisan2->Id_number = '22557788';
        $artisan2->categorie_id = '2';
        $artisan2->statuts = '1';
        $artisan2->verified = '1';  

        $user3 = new User();
        $user3->name = 'DEGKOF Archange';
        $user3->phone = '52003929';
        $user3->email = 'degkof@gmail.com';
        $user3->role_id = '2';
        $user3->password = bcrypt('degkof@gmail.com');
        $user3->profil = 'user.jpg';
        $user3->sexe = 'Masculin';
        $user3->ville_id = '1';
        $user3->adresse = 'Houehiho';
        $user3->save();

        $artisan3 = new Artisan();
        $artisan3->user_id = $user3->id;
        $artisan3->name = 'DEGKOF Archange';
        $artisan3->phone = '52003929';
        $artisan3->ville_id = '2';
        $artisan3->adresse = 'Houehiho';
        $artisan3->Id_number = '03554128';
        $artisan3->categorie_id = '5';
        $artisan3->statuts = '1';
        $artisan3->verified = '1';   

        $user4 = new User();
        $user4->name = 'AKOTO Consuela';
        $user4->phone = '69853081';
        $user4->email = 'akoto@gmail.com';
        $user4->role_id = '2';
        $user4->password = bcrypt('akoto@gmail.com');
        $user4->profil = 'user.jpg';
        $user4->sexe = 'Feminin';
        $user4->ville_id = '1';
        $user4->adresse = 'Akpakpa';
        $user4->save();

        $artisan4 = new Artisan();
        $artisan4->user_id = $user4->id;
        $artisan4->name = 'AKOTO Consuela';
        $artisan4->phone = '69853081';
        $artisan4->ville_id = '2';
        $artisan4->adresse = 'Akpakpa';
        $artisan4->Id_number = '03554128';
        $artisan4->categorie_id = '1';
        $artisan4->statuts = '1';
        $artisan4->verified = '1';   

         
        $user5 = new User();
        $user5->name = 'WABI Roucka';
        $user5->phone = '51797722';
        $user5->email = 'wabi@gmail.com';
        $user5->role_id = '2';
        $user5->password = bcrypt('wabi@gmail.com');
        $user5->profil = 'user.jpg';
        $user5->sexe = 'Feminin';
        $user5->ville_id = '4';
        $user5->adresse = 'Rose coix';
        $user5->save();

        $artisan5 = new Artisan();
        $artisan5->user_id = $user5->id;
        $artisan5->name = 'WABI Roucka';
        $artisan5->phone = '51797722';
        $artisan5->ville_id = '2';
        $artisan5->adresse = 'Rose coix';
        $artisan5->Id_number = '11235469';
        $artisan5->categorie_id = '8';
        $artisan5->statuts = '1';
        $artisan5->verified = '1';  
         
        $user6 = new User();
        $user6->name = 'Franel B';
        $user6->phone = '97335374';
        $user6->email = 'frano@gmail.com';
        $user6->role_id = '2';
        $user6->password = bcrypt('frano@gmail.com');
        $user6->profil = 'user.jpg';
        $user6->sexe = 'Masculin';
        $user6->ville_id = '20';
        $user6->adresse = 'Carrefour Gar';
        $user6->save();

        $artisan6 = new Artisan();
        $artisan6->user_id = $user6->id;
        $artisan6->name = 'Franel B';
        $artisan6->phone = '97335374';
        $artisan6->ville_id = '2';
        $artisan6->adresse = 'Carrefour Gar';
        $artisan6->Id_number = '14253698';
        $artisan6->categorie_id = '10';
        $artisan6->statuts = '1';
        $artisan6->verified = '1';   
         
        $user7 = new User();
        $user7->name = 'Gedeon Gedson';
        $user7->phone = '90315362';
        $user7->email = 'gedson@gmail.com';
        $user7->role_id = '2';
        $user7->password = bcrypt('gedson@gmail.com');
        $user7->profil = 'user.jpg';
        $user7->sexe = 'Masculin';
        $user7->ville_id = '25';
        $user7->adresse = 'Marché central';
        $user7->save();

        $artisan7 = new Artisan();
        $artisan7->user_id = $user7->id;
        $artisan7->name = 'Gedeon Gedson';
        $artisan7->phone = '90315362';
        $artisan7->ville_id = '2';
        $artisan7->adresse = 'Marché central';
        $artisan7->Id_number = '14333698';
        $artisan7->categorie_id = '6';
        $artisan7->statuts = '1';
        $artisan7->verified = '1';   
         
        $user8 = new User();
        $user8->name = 'Max ALDO';
        $user8->phone = '66575397';
        $user8->email = 'aldo@gmail.com';
        $user8->role_id = '2';
        $user8->password = bcrypt('aldo@gmail.com');
        $user8->profil = 'user.jpg';
        $user8->sexe = 'Masculin';
        $user8->ville_id = '1';
        $user8->adresse = 'Agla';
        $user8->save();

        $artisan8 = new Artisan();
        $artisan8->user_id = $user8->id;
        $artisan8->name = 'Max ALDO';
        $artisan8->phone = '66575397';
        $artisan8->ville_id = '2';
        $artisan8->adresse = 'Agla';
        $artisan8->Id_number = '88333698';
        $artisan8->categorie_id = '6';
        $artisan8->statuts = '1';
        $artisan8->verified = '1';   
         
        $user9 = new User();
        $user9->name = 'TOSSA Justine';
        $user9->phone = '61488094';
        $user9->email = 'justine@gmail.com';
        $user9->role_id = '2';
        $user9->password = bcrypt('justine@gmail.com');
        $user9->profil = 'user.jpg';
        $user9->sexe = 'Feminin';
        $user9->ville_id = '3';
        $user9->adresse = 'Ouando';
        $user9->save();

        $artisan9 = new Artisan();
        $artisan9->user_id = $user9->id;
        $artisan9->name = 'TOSSA Justine';
        $artisan9->phone = '61488094';
        $artisan9->ville_id = '2';
        $artisan9->adresse = 'Ouando';
        $artisan9->Id_number = '88333698';
        $artisan9->categorie_id = '1';
        $artisan9->statuts = '1';
        $artisan9->verified = '1';   
         
        $user10 = new User();
        $user10->name = 'ZV Ola';
        $user10->phone = '62479676';
        $user10->email = 'ola@gmail.com';
        $user10->role_id = '2';
        $user10->password = bcrypt('ola@gmail.com');
        $user10->profil = 'user.jpg';
        $user10->sexe = 'Feminin';
        $user10->ville_id = '27';
        $user10->adresse = 'Marché';
        $user10->save();

        $artisan10 = new Artisan();
        $artisan10->user_id = $user10->id;
        $artisan10->name = 'ZV Ola';
        $artisan10->phone = '62479676';
        $artisan10->ville_id = '2';
        $artisan10->adresse = 'Marché';
        $artisan10->Id_number = '83412698';
        $artisan10->categorie_id = '1';
        $artisan10->statuts = '1';
        $artisan10->verified = '1';        
               
        
    }
}
