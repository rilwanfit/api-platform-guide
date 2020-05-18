<?php


namespace App\Domain;


interface Identifier
{
    public static function generate(): Identifier;
    public static function fromString(string $string) : Identifier;

    public function equals(Identifier $other): bool;

    public function toString(): string;
}
