<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'name' => 'Bibiana',
            'lastname' => 'Steinhaus',
            'description' => 'German football referee!!!',
            'type_id' => 1,
            'thumbnail' => ''
        ]);
        
        
    }
}
