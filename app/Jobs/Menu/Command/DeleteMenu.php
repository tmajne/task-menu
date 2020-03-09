<?php

declare(strict_types=1);

namespace App\Jobs\Menu\Command;

use App\Command\Menu\DeleteMenuCommand;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class DeleteMenu implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private DeleteMenuCommand $command;

    public function __construct(DeleteMenuCommand $command)
    {
        $this->command = $command;
    }

    public function handle(): void
    {
        //TODO: delete menu
        $menu = $this->command->field();
    }
}
