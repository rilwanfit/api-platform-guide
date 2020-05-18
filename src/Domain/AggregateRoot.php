<?php

namespace App\Domain;

interface AggregateRoot
{
    public function id(): Identifier;

    public function record($event): void;

    public function release(): array;
}
