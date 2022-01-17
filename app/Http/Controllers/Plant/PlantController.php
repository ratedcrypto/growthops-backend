<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Services\PlantService;
use App\Traits\ApiResponder;
use Illuminate\Http\JsonResponse as Response;

class PlantController extends Controller
{
    use ApiResponder;

    /**
     * Get all plants.
     *
     * @return Response
     */
    public function getPlants(): Response
    {
        return $this->success(PlantService::getPlants());
    }

    /**
     * Get an individual plant.
     *
     * @param int $id
     * @return Response
     */
    public function getPlant(int $id): Response
    {
        return $this->success(PlantService::getPlant($id));
    }
}
