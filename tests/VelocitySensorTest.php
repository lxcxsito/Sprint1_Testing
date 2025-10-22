<?php

use PHPUnit\Framework\TestCase;
use App\VelocitySensor;

final class VelocitySensorTest extends TestCase
{
    private VelocitySensor $sensor;

    protected function setUp(): void
    {
        $this->sensor = new VelocitySensor();
    }

    public function testMoltLent(): void
    {
        $this->assertEquals("Molt Lent", $this->sensor->checkVelocity(20));
    }

    public function testVelocitatAdequada(): void
    {
        $this->assertEquals("Velocitat Adequada", $this->sensor->checkVelocity(45));
    }

    public function testExcesLleu(): void
    {
        $this->assertEquals("Exces Lleu", $this->sensor->checkVelocity(70));
    }

    public function testExcesModerat(): void
    {
        $this->assertEquals("Exces Moderat", $this->sensor->checkVelocity(90));
    }

    public function testExcesGreu(): void
    {
        $this->assertEquals("Exces Greu", $this->sensor->checkVelocity(120));
    }
}


?>