<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'id'   => 1,
            'name' => 'Joao',
        ]);

        User::factory()->create([
            'id'   => 2,
            'name' => 'Jose',
        ]);

        User::factory()->create([
            'id'   => 3,
            'name' => 'Paulo',
        ]);
    }
}
