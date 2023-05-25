<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class AnnoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annonces')->insert([
            [
                'title'=>"Besoin d'un menager",
                'categorie_id'=>'1',
                'ville_id'=>'1',
                'budget'=>'2500',
                'content'=>"Résident à cotonou j'ai besoin d'un menager pour des travaux chez moi merci ",
                'user_id'=>'3',
                
            ],
            [
                'title'=>"Besoin d'un coiffeur",
                'categorie_id'=>'10',
                'ville_id'=>'1',
                'budget'=>'10000',
                'content'=>"Bonjour, j'ai besoin d'un coiffeur pour coiffer mes garcons d'honneurs pour une grande cérémonies ",
                'user_id'=>'4',
            ],
            [
                'title'=>"Besoin d'un coiffeur",
                'categorie_id'=>'10',
                'ville_id'=>'1',
                'budget'=>'1000',
                'content'=>"Bonjour, j'ai besoin d'un coiffeur pour me coiffer chez moi j'assure le déplacement merci ",
                'user_id'=>'5',
            ],
            [
                'title'=>"Besoin d'un Mecanisien",
                'categorie_id'=>'5',
                'ville_id'=>'2',
                'budget'=>'1',
                'content'=>"Je viens d'avoir une panne tout juste devant la place Amazone j'ai besoin d'un mecanisien pour un dépannage", 
                'user_id'=>'6',
            ],
            [
                'title'=>"Besoin de plusieurs carreauleurs",
                'categorie_id'=>'8',
                'ville_id'=>'1',
                'budget'=>'1',
                'content'=>"Besoin de plusieurs carreauleurs pour la finition d'un grand chantier situé à Zogbo " ,
                'user_id'=>'7',
            ],
            [
                'title'=>"Besoin de me faire laver ma voiture",
                'categorie_id'=>'4',
                'ville_id'=>'2',
                'budget'=>'1',
                'content'=>"Bonsoir j'ai besoin d'un laveur pour le lavage de 4 véhicules à domicile " ,
                'user_id'=>'8',
            ],
            [
                'title'=>"Besoin d'un plombier",
                'categorie_id'=>'2',
                'ville_id'=>'1',
                'budget'=>'5000',
                'content'=>"J'ai une fuite d'eau dans ma maison et ma facture d'eau anormalement j'ai besoin urgemment d'un plombier pour me resourdre le probleme merci ", 
                'user_id'=>'9',
            ],
            [
                'title'=>"Besoin de me faire laver ma voiture",
                'categorie_id'=>'4',
                'ville_id'=>'2',
                'budget'=>'1',
                'content'=>"Bonsoir j'ai besoin d'un laveur pour le lavage de 4 véhicules à domicile ", 
                'user_id'=>'9',
            ],
            [
                'title'=>"Besoin de plusieurs carreauleurs",
                'categorie_id'=>'8',
                'ville_id'=>'1',
                'budget'=>'1',
               
                'content'=>"Besoin de plusieurs carreauleurs pour la finition d'un grand chantier situé à Zogbo ",
                'user_id'=>'9',
            ],
        ]);
    }
}
