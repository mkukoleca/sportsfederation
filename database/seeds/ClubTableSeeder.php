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
            'name' => 'Boston Celtic',
            'address' => 'Boston',
            'email' => 'boston@look.me',
            'website' => 'http://bostonceltic.com',
            'dateOfFoundation' => '2021-01-01',
            'director' => 'Isaia',
            'history' => 'They are good!!!',
            'thumbnail' => ' '
            ]);
    }
}
