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
            'date' => '2019-10-01',
            'place' => 'Dvorana Borik',
            'home' => 'Borac',
            'guest' => 'Metaloplastika',
            'category'=> 'U17',
            'referee1' => 'Hamzo Humo',
            'referee2' => 'Mladen Oljača',
            'delegate' => 'Antonije Isaković',
            'round' => 2,
            'note' => 'Utakmica je odigrana u mirnom tonu i sa velikim igračkim žarom.'
        ]);

        DB::table('games')->insert([
            'eventId' => 1,  
            'date' => '2019-10-05',
            'place' => 'Arena Centar',
            'home' => 'Crvena Zvezda',
            'guest' => 'Budućnost',
            'category'=> 'senior',
            'referee1' => 'Petko Stamenković',
            'referee2' => 'Miodrag Stefanović',
            'delegate' => 'Boško Rudić',
            'round' => 1,
            'note' => 'Utakmica je odigrana u paklenoj navijačkoj atmosferi koja je doprinijela pobjedi gostiju.'
        ]);
    }
}
