<?php

use Illuminate\Database\Seeder;

class FederationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('federations')->insert([
            'name' => 'Rukometni Savez Republike Srpske',
            'history' => '26 Septembar 1992 godine predstavlja početak osnivanja Rukometnog saveza Republike Srpske od strane Dušana Popovića koji je ujedno i prvi predsjednik saveza.',
            'president' => 'Marinko Umićević',
            'description' => 'Osnovni zadaci Savza su rad na organizaciji sistema takmičenja, organizaciono učvršćivanje rukometnog sporta, razvijanje rukometa i rad na njegovoj masovnosti, te saradnja sa drugim asocijacijama kao i pružanje pomoći klubovma.',
        ]);
    }
}
