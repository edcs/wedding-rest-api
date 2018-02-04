<?php namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateInvites extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'invites:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create invite entries in database.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('it works!');
    }
}
