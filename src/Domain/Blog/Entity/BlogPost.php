<?php

declare(strict_types=1);

namespace App\Domain\Blog\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

/** @ApiResource() */
class BlogPost
{
    /**
     * @ApiProperty(identifier=true)
     */
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
