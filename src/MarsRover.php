<?php

namespace GQ\Kata;

class MarsRover
{
    public function execute(string $commands): string
    {
        return '0:'.strlen($commands).':N';
    }
}
