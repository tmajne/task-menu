<?php

namespace App\Jobs\Menu\Query;

use App\Dto\Menu\MenuDto;
use App\Query\Menu\MenuQuery;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Menu implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private MenuQuery $query;

    public function __construct(MenuQuery $query)
    {
        $this->query = $query;
    }

    public function handle(): MenuDto
    {
        $menu = MenuDto::fromArray([
            'field' => 'test',
            'max_depth' => 11,
            'max_children' => 3
        ]);

        return $menu;
    }
}
