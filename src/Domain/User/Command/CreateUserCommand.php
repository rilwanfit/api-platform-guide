<?php

declare(strict_types=1);

namespace App\Domain\User\Command;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     messenger=true,
 *     collectionOperations={"POST"={"status"=202}},
 *     itemOperations={},
 *     output=false
 * )
 */
final class CreateUserCommand
{
    /**
     * @Assert\NotBlank()
     */
    private string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
