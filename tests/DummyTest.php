<?php

namespace GQ\Kata\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class DummyTest extends TestCase
{
    #[Test]
    public function is_true(): void
    {
	self::assertTrue(true);
    }
}
