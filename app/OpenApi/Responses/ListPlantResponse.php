<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\PlantSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListPlantResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->properties(
            Schema::string('status')->example('success'),
            Schema::object('data')->example(PlantSchema::ref())
        );

        return Response::ok()->description('Successful response')->content(
            MediaType::json()->schema($response)
        );
    }
}
