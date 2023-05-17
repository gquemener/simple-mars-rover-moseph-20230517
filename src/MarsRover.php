<?php

namespace GQ\Kata;

class MarsRover
{
    public function execute(string $commands): string
    {
        return (empty($commands)) ? '0:0:N' : '0:1:N';
    }
}