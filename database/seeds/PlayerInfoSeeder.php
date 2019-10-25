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
            'name' => 'Nikolina Vranješ',
            'description' => 'Jedan od najmlađih igrača tima.',
            'position' => 'Pivot',
            'height' => '189',
            'weight' => '70',
            'jerseyNumber' => 7,
            'dateOfBirth' => '1999-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Igrao je u tri tima do sada.',
            'clubId' => 2,
            'selectionId' => 1,
        ]);

        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Srđan Knezević',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 2,
            'selectionId' => 1,
            
        ]);

        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Saša Oljača',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 2,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Predrag Koprena',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 2,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Goran Lukač',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 2,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Bilja P',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 3,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Tanja Maksimović',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 3,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Renata Šikanjić',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 3,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Dijana Kovačević',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 3,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Danijel Vrebac',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 3,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Jovana Šatara',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 1,
            'selectionId' => 1,
            
        ]);

        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Igor Miljić',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 1,
            'selectionId' => 1,
            
        ]);

        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Jelena Mihajlović',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 1,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Igor Musić',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 1,
            'selectionId' => 1,
            
        ]);
        DB::table('player_infos')->insert([
            'thumbnail' => '',
            'name' => 'Nikola Dafinić',
            'description' => 'Najbolji krilni napadač na Balkanu',
            'position' => 'lijevo krilo',
            'height' => '182',
            'weight' => '75',
            'jerseyNumber' => 8,
            'dateOfBirth' => '1984-02-04',
            'citizenship' => 'Boznia and Herzegovina', 
            'playerHistory' => 'Ponikao u redovima Partizana',
            'clubId' => 1,
            'selectionId' => 1,
            
        ]);
       
    }
}
