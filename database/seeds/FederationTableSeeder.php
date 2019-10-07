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
            'name' => 'Rukometni savez Republike Srpske',
            'description' => 'Rukometni savez Republike Srpske (engl. Handball Federation of the Republic of Srpska) krovna je sportska organizacija koje okuplja sve rukometne klubove, rukometne sudije i organizuje sportska takmičenja u rukometu na teritoriji Republike Srpske.
            Savez sarađuje sa Ministarstvom porodice, omladine i sporta Republike Srpske. Sjedište saveza se nalazi u ulici Braće Pantić br.4 u Banjoj Luci.
            Pod kontrolom saveza je Rukometna reprezentacija Republike Srpske koja predstavlja Republiku Srpsku u međunarodnim prijateljskim utakmicama u rukometu.',
            'history' => '',
            'owner' => '',
            
            ]);
    }
}
