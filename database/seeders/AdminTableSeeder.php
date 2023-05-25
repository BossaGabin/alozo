<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [ 
                'name' => 'BOSSA Gabin',
                'phone' => '52091145',
                'email' => 'gabinbossa02@gmail.com',
                'password' => bcrypt('Gabin@1234'),
                'role_id' => '1',
                       
            ],
            [ 
                'name' => 'AKANHO Aziz',
                'phone' => '97847481',
                'email' => 'azizakanho3@gmail.com',
                'password' =>  bcrypt('aziz@1234'),
                'role_id' => '1',
                       
            ],
        ]);
    }
}
