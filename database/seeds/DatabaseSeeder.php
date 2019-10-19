<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FederationTableSeeder::class,
            StaffTypeTableSeeder::class,
            StaffTableSeeder::class,
            FederationStaffTableSeeder::class,
            ClubTableSeeder::class,
            SelectionsSeeder::class,
            EventSeeder::class,
            GamesSeeder::class,
            PlayerInfoSeeder::class,

        ]);
    }
}