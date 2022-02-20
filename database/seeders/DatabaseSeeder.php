<?php

namespace Database\Seeders;

use Database\Factories\PersonalRecordFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            MovementTableSeeder::class,
            PersonalRecordFactory::class
        ]);
    }
}
