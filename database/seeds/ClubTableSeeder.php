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
            'name' => 'Omladinski Rukometni Klub Čelinac',
            'address' => 'Čelinac bb',
            'website' => 'm.me/omladinskirukometniklub.celinac',
            'dateOfFoundation' => '2021-01-01',
            'director' => '...',
            'history' => '....'
            ]);
    }
}
