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
}
