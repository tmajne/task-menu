<?php

declare(strict_types=1);

namespace App\Command\Menu;

use App\Dto\Menu\MenuDto;
use InvalidArgumentException;

class CreateMenuCommand
{
    private MenuDto $menu;

    public function __construct(MenuDto $menu)
    {
        $this->validate($menu);
        $this->menu = $menu;
    }

    public function menu(): MenuDto
    {
        return $this->menu;
    }

    private function validate(MenuDto $dto): void
    {
        if ($dto->maxDepth <= 0) {
            throw new InvalidArgumentException('Max depth should be greater then 0');
        }
        if ($dto->maxChildren <= 0) {
            throw new InvalidArgumentException('Max children should be greater then 0');
        }
    }
}
