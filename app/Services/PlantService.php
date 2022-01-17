<?php

namespace App\Services;

use App\Models\Plant;

class PlantService
{
    /**
     * Get Plants.
     *
     * @return array
     */
    public static function getPlants(): array
    {
        return Plant::paginate()->toArray();
    }

    /**
     * Get Plant.
     *
     * @param int $id
     * @return array
     */
    public static function getPlant(int $id): array
    {
        $plant = Plant::find($id);

        if (!$plant) {
            return [];
        }
        return Plant::find($id)->toArray();
    }

    /**
     * Add a new plant.
     *
     * @param array $data
     * @return array
     */
    public static function createNewPlant(array $data): array
    {
        $plant = new Plant;
        $plant->name = $data['name'];
        $plant->species = $data['species'];
        $plant->watering_instructions = $data['watering_instructions'];
        $plant->photo = $data['photo'];
        $plant->save();

        return $plant->toArray();
    }
}
