<?php

namespace GQ\Kata\Tests;

use GQ\Kata\MarsRover;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{
    #[Test]
    public function should_not_move_when_executing_nothing(): void
    {
        $marsRover = new MarsRover();
        $position = $marsRover->execute('');

        $this->assertEquals('0:0:N', $position);
    }

    #[Test]
    public function should_move_forward(): void
    {
        $marsRover = new MarsRover();
        $position = $marsRover->execute('M');

        $this->assertEquals('0:1:N', $position);
    }
}