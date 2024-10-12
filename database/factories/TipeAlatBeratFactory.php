<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\KategoriAlatBerat;
use App\Models\TipeAlatBerat;

class TipeAlatBeratFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipeAlatBerat::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'kategori_alat_berat_id' => KategoriAlatBerat::factory(),
            'merek_alat_berat_id' => ::factory(),
        ];
    }
}
