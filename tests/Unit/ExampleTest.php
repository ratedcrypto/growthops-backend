<?php

use App\Models\Plant;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('can fetch plants', function () {
    Plant::factory()->times(5)->create();
    $response = $this->getJson("/api/v1/plants");
    $this->assertCount(5, $response->json()['data']['data']);
});

it('can fetch a plant', function () {
    $plant = Plant::factory()->create();
    $response = $this->getJson("/api/v1/plants/{$plant->id}");
    $data = [
        'status' => 'success',
        'data' => [
            'id' => $plant->id,
            'name' => $plant->name,
            'species' => $plant->species,
            'watering_instructions' => $plant->watering_instructions,
            'photo' => $plant->photo
        ]
    ];

    $response->assertStatus(200)->assertJson($data);
});

it('can create a plant', function () {
    $plant = Plant::factory()->raw();
    $response = $this->postJson('/api/v1/plants', $plant);
    $response->assertStatus(201)->assertJson(['status' => 'success', 'data' => $plant]);
    $this->assertDatabaseHas('plants', $plant);
});

it('error when name not supplied', function () {
    $response = $this->postJson('/api/v1/plants', ['title' => 'Algae']);
    $response->assertStatus(422);
});
