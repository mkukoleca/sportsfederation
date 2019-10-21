<?php

use Illuminate\Database\Seeder;
use App\StaffType;

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
            'id' => StaffType::DELEGATE
        ]);
    
        DB::table('staff_types')->insert([
            'name' => 'Referee',
            'id' => StaffType::REFEREE
        ]);

        DB::table('staff_types')->insert([
            'name' => 'Coach',
            'id' => StaffType::COACH
        ]);
        
        DB::table('staff_types')->insert([
            'name' => 'Doctor',
            'id' => StaffType::DOCTOR
        ]);
    }
}
