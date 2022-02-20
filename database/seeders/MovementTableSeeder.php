<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Seeder;

class MovementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movement::factory()->create([
            'id'   => 1,
            'name' => 'Deadlift',
        ]);

        Movement::factory()->create([
            'id'   => 2,
            'name' => 'Back Squat',
        ]);

        Movement::factory()->create([
            'id'   => 3,
            'name' => 'Bench Press',
        ]);
    }
}
