<?php

namespace Database\Seeders;

use App\Models\TipeAlatBerat;
use Illuminate\Database\Seeder;

class TipeAlatBeratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipeAlatBerat::factory()->count(5)->create();
    }
}
