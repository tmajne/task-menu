<?php

declare(strict_types=1);

namespace App\Command\Menu;

use App\Dto\Menu\MenuDto;

class UpdateMenuCommand
{
    private string $menu;
    private MenuDto $menuDto;

    public function __construct(string $menu, MenuDto $dto)
    {
        $this->validate($menu, $dto);
        $this->menu = $menu;
        $this->menuDto = $dto;
    }

    public function menu(): string
    {
        return $this->menu;
    }

    public function menuDto(): MenuDto
    {
        return $this->menuDto;
    }

    private function validate(string $menu, MenuDto $dto): void
    {
        //TODO: add update validate rules
    }
}
