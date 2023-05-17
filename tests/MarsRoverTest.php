<?php

namespace GQ\Kata\Tests;

use GQ\Kata\MarsRover;
use PHPUnit\Framework\Attributes\DataProvider;
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

    #[
        Test,
        DataProvider('should_move_forward_provider')
    ]
    public function should_move_forward(string $commands, int $y): void
    {
        $position = $this->marsRover->execute($commands);

        $this->assertEquals(sprintf('0:%d:N', $y), $position);
    }

    public static function should_move_forward_provider(): array
    {
        return [
            ['M', 1],
            ['MM', 2],
        ];
    }

    #[Test]
    public function should_return_to_initial_position_when_crossing_the_top_edge(): void
    {
        $crossTheTopEdge = 'MMMMMMMMMM';
        $position = $this->marsRover->execute($crossTheTopEdge);

        $this->assertEquals('0:0:N', $position);
    }
}
