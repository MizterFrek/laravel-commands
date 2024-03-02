<?php

namespace Mizterfrek\LaravelCommands;

use Illuminate\Support\ServiceProvider;

class ArtisanCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        $this->commands(MakeRepository::class);
    }
}