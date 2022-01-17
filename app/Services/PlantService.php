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
}
