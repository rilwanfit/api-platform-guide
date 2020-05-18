<?php


namespace App\Domain;


interface Entity
{
    public function id(): Identifier;
}
