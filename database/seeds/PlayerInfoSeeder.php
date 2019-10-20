<?php

use Illuminate\Database\Seeder;

class PlayerInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Marko Marković',
            'description' => 'Jedan od najmlađih igrača tima.',
            'position' => 'Pivot',
            'height' => '189',
            'weight' => '70',
            'jerseyNumber' => 7,
            'dateOfBirth' => '1999-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Igrao je u tri tima do sada.',
            'clubId' => 1,
            'selection' => 'Senior',
        ]);

        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Stanojko Pantić',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 2,
            'selection' => 'Senior',
            
        ]);
    }
}
