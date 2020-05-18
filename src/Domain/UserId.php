<?php

declare(strict_types=1);

namespace App\Domain;

class UserId implements Identifier
{
    public static function generate(): Identifier
    {
        // TODO: Implement generate() method.
    }

    public static function fromString(string $string): Identifier
    {
        // TODO: Implement fromString() method.
    }

    public function equals(Identifier $other): bool
    {
        // TODO: Implement equals() method.
    }

    public function toString(): string
    {
        // TODO: Implement toString() method.
    }
}
