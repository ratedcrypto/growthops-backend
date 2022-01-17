<?php

namespace App\OpenApi\Schemas;

use App\Models\Plant;
use GoldSpecDigital\ObjectOrientedOAS\Contracts\SchemaContract;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AllOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Not;
use GoldSpecDigital\ObjectOrientedOAS\Objects\OneOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\SchemaFactory;

class PlantSchema extends SchemaFactory implements  Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        $plant = new Plant;
        $plant->id = 1;
        $plant->name = 'Ortiz';
        $plant->species = 'Voluptas dolor sint autem qui voluptatem.';
        $plant->watering_instructions = 'Veritatis atque minus enim quis optio asperiores ut. Accusantium provident animi deleniti sunt.';
        $plant->photo = 'https://via.placeholder.com/360x360.png/0000ff?text=plants+roses+voluptas';

        return Schema::object('Plant')
            ->properties(
                Schema::string('name'),
                Schema::string('species'),
                Schema::string('watering_instructions'),
                Schema::string('photo'),
            )->description('Plant schema')->example($plant);
    }
}
