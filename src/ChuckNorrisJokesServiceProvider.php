<?php

namespace Zaratedev\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Zaratedev\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Zaratedev\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([ChuckNorrisJoke::class]);
        }

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', fn () => new JokeFactory());
    }
}
