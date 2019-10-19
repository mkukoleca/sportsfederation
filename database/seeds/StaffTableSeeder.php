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
            'name' => 'Bibiana Delegate',
            'lastname' => 'Steinhaus',
            'description' => 'German football referee!!!',
            'type_id' => 1,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'name' => 'Bibiana Referee',
            'lastname' => 'Steinhaus',
            'description' => 'German football referee!!!',
            'type_id' => 2,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'name' => 'Bibiana Coach',
            'lastname' => 'Steinhaus',
            'description' => 'German football referee!!!',
            'type_id' => 3,
            'thumbnail' => ''
        ]);

        DB::table('staffs')->insert([
            'name' => 'Bibiana Doctor',
            'lastname' => 'Steinhaus',
            'description' => 'German football referee!!!',
            'type_id' => 4,
            'thumbnail' => ''
        ]);
    }
}
