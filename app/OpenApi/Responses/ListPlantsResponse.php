<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\PlantSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListPlantsResponse extends ResponseFactory
{
    public function build(): Response
    {
        $response = Schema::object()->properties(
            Schema::string('status')->example('success'),
            Schema::object('data')->properties(
                Schema::integer('current_page')->example(1)->description('Current page'),
                Schema::array('data')->example(Schema::array()->items(PlantSchema::ref())),
                Schema::integer('from')->example(1)->description('From'),
                Schema::integer('last_page')->example(1)->description('Last page'),
                Schema::integer('per_page')->example(15)->description('Per page'),
                Schema::integer('total')->example(100)->description('Total page'),
                Schema::string('first_page_url')->example('success')->description('First page url'),
                Schema::string('prev_page_url')->example('success')->description('Previous page url'),
                Schema::string('next_page_url')->example('success')->description('Next page url'),
                Schema::string('last_page_url')->example('success')->description('Last page url'),
            )
        );

        return Response::ok()->description('Successful response')->content(
            MediaType::json()->schema($response)
        );
    }
}
