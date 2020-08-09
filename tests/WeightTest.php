<?php

namespace Robbplo\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Robbplo\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_converts_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
