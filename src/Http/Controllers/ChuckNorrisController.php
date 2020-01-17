<?php

namespace Zaratedev\ChuckNorrisJokes\Http\Controllers;

use Zaratedev\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}
