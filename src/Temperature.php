<?php

namespace Robbplo\UnitConversions;

class Temperature
{
    private float $kelvin;

    public function __construct(float $kelvin)
    {
        $this->kelvin = $kelvin;
    }

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius + 273.15);
    }

    public static function fromKelvin(float $kelvin): self
    {
        return new static($kelvin);
    }

    public static function fromFahrenheit(float $fahrenheit): self
    {
        return new static((($fahrenheit - 32) * 5) / 9 + 273.15);
    }

    public function toKelvin(): float
    {
        return $this->kelvin;
    }

    public function toFahrenheit(): float
    {
        return (($this->kelvin - 273.15) * 1.8) + 32;
    }

    public function toCelsius(): float
    {
        return $this->kelvin - 273.15;
    }
}
