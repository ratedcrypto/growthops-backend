<?php

use App\Models\Plant;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('can fetch plants', function () {
    Plant::factory()->times(5)->create();
    $response = $this->getJson("/api/v1/plants");
    $this->assertCount(5, $response->json()['data']['data']);
});
