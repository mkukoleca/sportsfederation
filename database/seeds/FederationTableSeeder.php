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
            'name' => 'IT Federation of Sharks',
            'history' => 'Established on 4th September',
            'owner' => 'IT community',
            'description' => 'Once you stop learining you start dying!',
        ]);
    }
}
