<?php namespace App\Console\Commands;

use App\Invite;
use Illuminate\Console\Command;
use League\Csv\Reader;

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
        $reader = Reader::createFromPath(resource_path('data/wedding-guest-list-ed.csv'));
        $records = $reader->getRecords();

        foreach ($records as $offset => $record) {
            if ($record[3] === 'Day') {
                $invite = new Invite();
                $invite->save();

                foreach (array_filter([$record[0], $record[1], $record[2]]) as $invitee) {
                    $invite->invitees()->create(['name' => $invitee]);
                }
            }
        }
    }
}
