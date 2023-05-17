<?php

namespace GQ\Kata\Tests;

use GQ\Kata\MarsRover;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Rules:
 * - starts at 0:0:N
 * - can turn right, left and move forward
 * - comes back to the other side of the grid
 */
class MarsRoverTest extends TestCase
{
    private MarsRover $marsRover;

    protected function setUp(): void
    {
        $this->marsRover = new MarsRover();
    }

    #[Test]
    public function should_not_move_when_executing_nothing(): void
    {
        $position = $this->marsRover->execute('');

        $this->assertEquals('0:0:N', $position);
    }

    #[Test]
    public function should_move_forward(): void
    {
        $position = $this->marsRover->execute('M');

        $this->assertEquals('0:1:N', $position);
    }

    #[Test]
    public function should_move_forward_twice(): void
    {
        $position = $this->marsRover->execute('MM');

        $this->assertEquals('0:2:N', $position);
    }

    #[Test]
    public function should_return_to_initial_position_when_crossing_the_top_edge(): void
    {
        $position = $this->marsRover->execute('MMMMMMMMMM');

        $this->assertEquals('0:0:N', $position);
    }
}
