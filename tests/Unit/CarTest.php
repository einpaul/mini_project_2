<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAddCarToDatabase()
    {

        $car = factory(\App\Car::class)->create();
        $this->assertDatabaseHas('cars', ['make' => $car->make]);
    }

    public function updateCarYear()

    {
        $car = Car::latest()->first();
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }

    public function testDeleteCar()

    {
        $car = Car::latest()->first();
        $this->assertTrue($car->delete());
    }
}
