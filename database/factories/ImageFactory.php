<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Image;
use App\Models\UnitAlatBerat;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->word(),
            'unit_alat_berat_id' => UnitAlatBerat::factory(),
        ];
    }
}
