<?php

use Illuminate\Database\Seeder;

class StaffTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_types')->insert([
            'name' => 'Delegate'
            
        ]);
    
        DB::table('staff_types')->insert([
            'name' => 'Referee'
            
        ]);
        DB::table('staff_types')->insert([
            'name' => 'Doctor'
            
        ]);
    }
}
