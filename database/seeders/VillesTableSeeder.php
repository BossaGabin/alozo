<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('villes')->insert([
          [ 
           'name' => 'Cotonou',
           'countrie_id' => '20',
          ],
          [
           'name' => 'Abomey-Calavi',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Porto-Novo',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Parakou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Djougou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Bohicon',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Natitingou',
           'countrie_id' => '20',
          ],
          [
           'name' => 'Savè',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Abomey',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Nikki',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Lokossa',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Ouidah',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Dogbo-Tota',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Kandi',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Cové',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'MalanVille',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Pobé',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Kérou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Savalou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Sakété',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Comè',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Bembéréké',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Bassila',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Banikoara',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Kétou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Dassa-Zoumè',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Tchaourou',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Allada',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Aplahoué',
           'countrie_id' => '20',
          ],
          [ 
           'name' => 'Tanguiéta',
           'countrie_id' => '20',
          ],
          [ 
           'name' => "N'Dali",
           'countrie_id' => '20',
          ],
          [ 
           'name' => "Segbana",
           'countrie_id' => '20',
          ],
          [ 
           'name' => "Athiémé",
           'countrie_id' => '20',
          ],
          [ 
           'name' => "Grand Popo",
           'countrie_id' => '20',
          ],
          [
           'name' => "Kouandé",
           'countrie_id' => '20',
          ],
       ]);

          }
}
