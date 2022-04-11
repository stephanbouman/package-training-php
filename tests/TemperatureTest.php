<?php

namespace Robbplo\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Robbplo\UnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_converts_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }

    /** @test */
    public function it_converts_fahrenheit_to_celsius()
    {
        $celsius = Temperature::fromFahrenheit(212)->toCelsius();

        $this->assertEquals(100, $celsius);
    }

    /** @test */
    public function it_converts_kelvin_to_celsius()
    {
        $celsius = Temperature::fromKelvin(100)->toCelsius();

        $this->assertEquals(-173.15, $celsius);
    }

    /** @test */
    public function it_converts_kelvin_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromKelvin(400)->toFahrenheit();

        $this->assertEquals(260.33, $fahrenheit);
    }

    /** @test */
    public function it_converts_celsius_to_celcius()
    {
        $celsius = Temperature::fromCelsius(200)->toCelsius();

        $this->assertEquals(200, $celsius);
    }

    /** @test */
    public function it_converts_celcius_to_kelvin()
    {
        $celsius = Temperature::fromCelsius(100)->toKelvin();

        $this->assertEquals(373.15, $celsius);
    }

}
