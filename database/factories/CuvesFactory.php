<?php

namespace Database\Factories;
use App\Models\Cuves;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuves>
 */
class CuvesFactory extends Factory
{
    protected $model = Cuves::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_cuve' => $this->faker->unique()->word(), 
            'volume_max' => $this->faker->numberBetween(500, 5000), 
            'cuverie_id' => \App\Models\Cuverie::factory(),
        ];
    }
}
