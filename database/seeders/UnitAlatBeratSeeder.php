<?php

namespace Database\Seeders;

use App\Models\UnitAlatBerat;
use Illuminate\Database\Seeder;

class UnitAlatBeratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitAlatBerat::factory()->count(5)->create();
    }
}
