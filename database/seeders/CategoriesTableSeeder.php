<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
     [ 
                'name' => 'Menage',
                
     ],
     [ 
                'name' => 'Plomberie',
                
     ],
     [ 
                'name' => 'Maçonnerie',
                
     ],
     [ 
                'name' => 'Lavage',
                
     ],
     [ 
                'name' => 'Mécanique',
                
     ],
     [ 
                'name' => 'Electricité',
                
     ],
     [ 
                'name' => 'Menuiserie',
                
     ],
     [ 
                'name' => 'Carrelage',
                
     ],
     [ 
                'name' => 'Peinture',
                
     ],
     [ 
                'name' => 'Coiffure-Homme',
                
     ],
     [ 
                'name' => 'Coiffure-Femme',
                
     ],
         ]);
    }
}
