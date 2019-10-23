<?php

use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'eventId' => 1,  
            'dateTime' => '2019-10-23 09:42:11',
            'place' => 'Dvorana Borik',
            'homeClubId' => 'Borac',
            'guestClubId' => 'Metaloplastika',
            'category'=> 'U21',
            'referee1Id' => 2,
            'referee2Id' => 2,
            'delegateId' => 1,
            'round' => 2,
            'note' => 'Utakmica je odigrana u mirnom tonu i sa velikim igračkim žarom.'
        ]);

        DB::table('games')->insert([
            'eventId' => 1,  
            'dateTime' => '2018-09-16 11:42:11',
            'place' => 'Arena Centar',
            'homeClubId' => 'Crvena Zvezda',
            'guestClubId' => 'Budućnost',
            'category'=> 'senior',
            'referee1Id' => 2,
            'referee2Id' => 2,
            'delegateId' => 1,
            'round' => 1,
            'note' => 'Utakmica je odigrana u paklenoj navijačkoj atmosferi koja je doprinijela pobjedi gostiju.'
        ]);
    }
}
