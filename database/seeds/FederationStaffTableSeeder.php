<?php

use Illuminate\Database\Seeder;

class FederationStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('federation_staff')->insert([
            'federation_id' =>  1,
            'staff_id' => 1,
            'staff_type_id' => 1,
        ]);

        
        DB::table('federation_staff')->insert([
            'federation_id' =>  1,
            'staff_id' => 2,
            'staff_type_id' => 2,
        ]);
        
        DB::table('federation_staff')->insert([
            'federation_id' =>  1,
            'staff_id' => 3,
            'staff_type_id' => 3,
        ]);

        
        DB::table('federation_staff')->insert([
            'federation_id' =>  1,
            'staff_id' => 4,
            'staff_type_id' => 4,
        ]);
    }
}
