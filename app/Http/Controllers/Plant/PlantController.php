<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPlantRequest;
use App\OpenApi\Responses\AddPlantResponse;
use App\OpenApi\Responses\ErrorValidationResponse;
use App\OpenApi\Responses\ListPlantResponse;
use App\OpenApi\Responses\ListPlantsResponse;
use App\Services\PlantService;
use App\Traits\ApiResponder;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;
use Illuminate\Http\JsonResponse as Response;

#[OpenApi\PathItem]
class PlantController extends Controller
{
    use ApiResponder;

    /**
     * Get all plants.
     *
     * @return Response
     */
    #[OpenApi\Operation(tags: ['plant'], method: 'GET')]
    #[OpenApi\Response(factory: ListPlantsResponse::class, statusCode: 200)]
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
    #[OpenApi\Operation(tags: ['plant'], method: 'GET')]
    #[OpenApi\Response(factory: ListPlantResponse::class, statusCode: 200)]
    public function getPlant(int $id): Response
    {
        return $this->success(PlantService::getPlant($id));
    }

    /**
     * Add a new plant.
     *
     * @param AddPlantRequest $request
     * @return Response
     */
    #[OpenApi\Operation(tags: ['plant'], method: 'POST')]
    #[OpenApi\Response(factory: AddPlantResponse::class, statusCode: 201)]
    #[OpenApi\Response(factory: ErrorValidationResponse::class, statusCode: 422)]
    public function postNewPlant(AddPlantRequest $request): Response
    {
        $plant = PlantService::createNewPlant($request->all());

        return $this->success($plant, 201);
    }
}
