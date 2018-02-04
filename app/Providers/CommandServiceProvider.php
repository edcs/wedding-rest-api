<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\CreateInvites;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.invites:create', function() {
            return new CreateInvites();
        });

        $this->commands('command.invites:create' );
    }
}
