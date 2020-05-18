<?php

declare(strict_types=1);

namespace App\Domain;

interface ValueObject
{
    public static function fromNative($native) : ValueObject;

    public function equals(ValueObject $object) : bool;
}
