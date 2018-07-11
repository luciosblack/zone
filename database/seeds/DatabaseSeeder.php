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
        $this->call(ZonasSeeder::class);
        $this->call(UsosSeeder::class);
        $this->call(UsosZonasSeeder::class);
    }
}
