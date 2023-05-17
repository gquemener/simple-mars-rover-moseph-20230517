<?php

namespace GQ\Kata;

class MarsRover
{
    public function execute(string $commands): string
    {
        if (empty($commands)) {
            return '0:0:N';
        }

        return '0:1:N';
    }
}
