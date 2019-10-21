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
            'gender' => 'Male',
            'category' => 'Senior',
            'history' => 'Ova selekcija je dio velikog kolektiva, srce na teren, bla bla',
            'coachId' => 1,
            'clubId' => 1
        ]);
        DB::table('selection')->insert([
            'gender' => 'Female',
            'category' => 'U17',
            'history' => 'Selekcija koja daje sve od sebe. ',
            'coachId' => 1,
            'clubId' => 1
        ]);
    }
}
