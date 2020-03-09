<?php

declare(strict_types=1);

namespace App\Dto\Menu;

class MenuDto
{
    public ?string $field = null;
    public ?int $maxDepth = null;
    public ?int $maxChildren = null;

    public static function fromArray(array $data): MenuDto
    {
        $dto = new static();
        $dto->field = $data['field'] ?? null;
        $dto->maxDepth = $data['max_depth'] ?? null;
        $dto->maxChildren = $data['max_children'] ?? null;

        return $dto;
    }
}
