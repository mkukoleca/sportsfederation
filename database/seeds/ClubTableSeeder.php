<?php

use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'name' => 'Kornjače',
            'address' => 'Apeiron bb',
            'email' => 'kornjace@email.me',
            'website' => 'http://kornjace.com',
            'dateOfFoundation' => '2019-08-19',
            'director' => 'Svi za jednog jedan za sve',
            'history' => 'Spori, ali dobri...',
            'thumbnail' => ' '
            ]);

        
        DB::table('clubs')->insert([
            'name' => 'NijePekmez',
            'address' => 'Apeiron bb',
            'email' => 'nijepekmez@look.me',
            'website' => 'http://nijepekmez.com',
            'dateOfFoundation' => '2019-08-19',
            'director' => 'Svi za jednog jedan za sve',
            'history' => 'Sve je, samo nije pekmez...by head of support, Nikolina',
            'thumbnail' => ' '
            ]);
            
        DB::table('clubs')->insert([
            'name' => 'Sharks',
            'address' => 'Apeiron bb',
            'email' => 'boston@look.me',
            'website' => 'http://sharks.com',
            'dateOfFoundation' => '2019-08-19',
            'director' => 'Svi za jednog jedan za sve',
            'history' => 'Ujedaju :D',
            'thumbnail' => ' '
            ]);
    }
}
