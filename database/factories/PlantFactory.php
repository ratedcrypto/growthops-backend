<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PlantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plant::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['name' => "string", 'species' => "string", 'watering_instructions' => "string", 'photo' => "string"])]
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'species'=>$this->faker->text(50),
            'watering_instructions'=>$this->faker->paragraph(3),
            'photo'=>$this->faker->imageUrl(360, 360, 'plants', true, 'roses'),
        ];
    }
}
