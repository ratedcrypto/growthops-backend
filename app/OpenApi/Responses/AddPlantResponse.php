<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\PlantSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class AddPlantResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->properties(
            Schema::string('status')->example('success'),
            Schema::object('data')->example(PlantSchema::ref())
        );

        return Response::ok()->description('Successful response')->statusCode(201)->content(
            MediaType::json()->schema($response)
        );
    }
}
