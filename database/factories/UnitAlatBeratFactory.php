<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\KategoriAlatBerat;
use App\Models\UnitAlatBerat;

class UnitAlatBeratFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UnitAlatBerat::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nomor_body' => $this->faker->word(),
            'kategori_alat_berat_id' => KategoriAlatBerat::factory(),
            'merek_alat_berat_id' => ::factory(),
            'tipe_alat_berat_id' => ::factory(),
            'featured_image' => $this->faker->word(),
        ];
    }
}
