<?php

use Illuminate\Database\Seeder;

class SelectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('selection')->insert([
            'gender' => 'M',
            'category' => 'Seniors',
            'history' => 'Ova selekcija je dio velikog kolektiva, srce na teren, bla bla',
            'coachId' => 1,
            'clubId' => 1
        ]);
    }
}
