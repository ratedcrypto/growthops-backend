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
}
