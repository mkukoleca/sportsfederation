<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('events')->insert([
            'type' => 'Cup',
            'name' => 'Game of the games',
            'season' => 'fall 2019',
            'description' => 'Great event, some of the best players etc.'
        ]);
        
    }
}
