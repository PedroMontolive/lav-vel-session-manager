<?php

namespace Pemto\SessionManager\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'session-manager:install', description: 'Install all of the session-manager resources')]
class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session-manager:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the session-manager resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

    }

}
