<?php

use Illuminate\Database\Seeder;
use App\StaffType;

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
            'id' => 1,
            'name' => 'Bibiana Delegate',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::DELEGATE,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 2,
            'name' => 'Bibiana Referee',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::REFEREE,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 3,
            'name' => 'Bibiana Coach',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::COACH,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 4,
            'name' => 'Bibiana Doctor',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::DOCTOR,
            'thumbnail' => ''
        ]);
    }
}
