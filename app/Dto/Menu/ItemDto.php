<?php

declare(strict_types=1);

namespace App\Dto\Menu;

class ItemDto
{
    public ?string $field = null;
    public array $children = [];

    public static function fromArray(array $data): ItemDto
    {
        $dto = new static();
        $dto->field = $data['field'] ?? null;
        $dto->children = $data['children'] ?? [];

        return $dto;
    }
}
