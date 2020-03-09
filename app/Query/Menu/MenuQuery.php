<?php

declare(strict_types=1);

namespace App\Query\Menu;

class MenuQuery
{
    private string $field;

    public function __construct(string $field)
    {
        $this->validate($field);
        $this->field = $field;
    }

    public function field(): string
    {
        return $this->field;
    }

    private function validate(string $field): void
    {
        //TODO: valdate logic
    }
}
