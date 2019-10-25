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
            'name' => 'Mirko Kukoleč',
            'description' => 'Hoćeš li da savladaš PHP? -Jesi li radio odam sati?',
            'type_id' => StaffType::DELEGATE,
            'thumbnail' => 'img/mirko.kukoleca.jpg',
            'email' => 'nesto@email.com',
            'facebook' => 'http//:www.facebook.com',
            'instagram' => 'http//:www.facebook.com',

        ]);

        DB::table('staffs')->insert([
            'id' => 2,
            'name' => 'Nevena Mićić',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::COACH,
            'thumbnail' => 'img/nevena.png',
            'email' => 'nesto@email.com',
            'facebook' => 'http//:www.facebook.com',
            'instagram' => 'http//:www.facebook.com',
        ]);

        DB::table('staffs')->insert([
            'id' => 3,
            'name' => 'Sergej Vuković',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::COACH,
            'thumbnail' => 'img/sergej.v.jpg',
            'email' => 'nesto@email.com',
            'facebook' => 'http//:www.facebook.com',
            'instagram' => 'http//:www.facebook.com',
        ]);

        DB::table('staffs')->insert([
            'id' => 4,
            'name' => 'Bibiana Doctor',
            'description' => 'German football referee!!!',
            'type_id' => StaffType::DOCTOR,
            'thumbnail' => '',
            'email' => 'nesto@email.com',
            'facebook' => 'http//:www.facebook.com',
            'instagram' => 'http//:www.facebook.com',
        ]);
    }
}
