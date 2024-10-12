<?php

namespace Database\Seeders;

use App\Models\KategoriAlatBerat;
use Illuminate\Database\Seeder;

class KategoriAlatBeratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriAlatBerat::factory()->count(5)->create();
    }
}
