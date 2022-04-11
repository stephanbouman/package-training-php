<?php

namespace Robbplo\UnitConversions;

class Temperature
{
    private float $celsius;

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public static function fromKelvin(float $kelvin): self
    {
        return new static($kelvin - 273.15);
    }

    public static function fromFahrenheit(float $fahrenheit): self
    {
        return new static((5 / 9) * ($fahrenheit - 32));
    }

    public function toKelvin(): float
    {
        return $this->celsius + 273.15;
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }


    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }

    public function toCelsius(): float
    {
        return $this->celsius;
    }
}
