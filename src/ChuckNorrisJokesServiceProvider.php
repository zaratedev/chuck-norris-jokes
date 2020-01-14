<?php

namespace Zaratedev\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Zaratedev\ChuckNorrisJokes\Console\ChuckNorrisJoke;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([ChuckNorrisJoke::class]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', fn () => new JokeFactory());
    }
}
