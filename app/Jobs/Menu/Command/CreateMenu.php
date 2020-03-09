<?php

declare(strict_types=1);

namespace App\Jobs\Menu\Command;

use App\Command\Menu\CreateMenuCommand;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateMenu implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private CreateMenuCommand $command;

    public function __construct(CreateMenuCommand $command)
    {
        $this->command = $command;
    }

    public function handle(): void
    {
        //TODO: create menu
        $menu = $this->command->menu();
    }
}
