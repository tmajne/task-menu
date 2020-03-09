<?php

declare(strict_types=1);

namespace App\Jobs\Menu\Command;

use App\Command\Menu\UpdateMenuCommand;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateMenu implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private UpdateMenuCommand $command;

    public function __construct(UpdateMenuCommand $command)
    {
        $this->command = $command;
    }

    public function handle(): void
    {
        //TODO: create menu
        $menu = $this->command->menu();
    }
}
