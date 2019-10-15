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
            'name' => 'Delegate',
            'id' => 1
            
        ]);
    
        DB::table('staff_types')->insert([
            'name' => 'Referee',
            'id' => 2
            
        ]);

        DB::table('staff_types')->insert([
            'name' => 'Coach',
            'id' => 3
            
        ]);
        DB::table('staff_types')->insert([
            'name' => 'Doctor',
            'id' => 4
            
        ]);
    }
}
