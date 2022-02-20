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
    public function run(): void
    {
        User::factory()->create([
            'id'    => 1,
            'name'  => 'Joao',
            'email' => 'joao@tecnofit.com.br',
        ]);

        User::factory()->create([
            'id'   => 2,
            'name' => 'Jose',
            'email' => 'jose@tecnofit.com.br',
        ]);

        User::factory()->create([
            'id'    => 3,
            'name'  => 'Paulo',
            'email' => 'paulo@tecnofit.com.br',
        ]);
    }
}
