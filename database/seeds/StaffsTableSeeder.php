<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'name' => 'Marko',
            'lastname' => 'Marić',
            'description' => 'The main duty of Delegate is to ensures a proper conduct of the match.',
            'type_id' => 1
        ]);
        
        DB::table('staffs')->insert([
            'name' => 'Maja', 
            'lastname' => 'Jović',
            'description' => 'Referees officiate games or competitions. They explain and enforce rules, assess penalties, signal the start and end of games, stop play for reviews as needed and inspect sports equipment prior to the start of games.',
            'type_id' => 2
        ]);
        
        DB::table('staffs')->insert([
            'name' => 'Igor',
            'lastname' => 'Krčić',
            'description' => 'Doctors are licensed health professionals who maintain players health during the game.',
            'type_id' => 3
        
        ]);
    }
}
