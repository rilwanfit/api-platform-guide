<?php

declare(strict_types=1);

namespace App\Domain;

class HasEvents
{
    private $events;

    public function record($event): void
    {
        $this->events[] = $event;
    }

    public function release(): array
    {
        $events = $this->events;

        $this->events = [];

        return $events;
    }
}
