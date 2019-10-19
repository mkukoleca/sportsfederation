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
            'id' => 1,
            'name' => 'Bibiana Delegate',
            'description' => 'German football referee!!!',
            'type_id' => 1,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 2,
            'name' => 'Bibiana Referee',
            'description' => 'German football referee!!!',
            'type_id' => 2,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 3,
            'name' => 'Bibiana Coach',
            'description' => 'German football referee!!!',
            'type_id' => 3,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'id' => 4,
            'name' => 'Bibiana Doctor',
            'description' => 'German football referee!!!',
            'type_id' => 4,
            'thumbnail' => ''
        ]);
    }
}
