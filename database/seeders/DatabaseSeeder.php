<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeders;
use Database\Seeders\CasosTableSeeder;
use Database\Seeders\StatusTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call(StatusTableSeeder::class);
    $this->call(CasosTableSeeder::class);
    }
}



