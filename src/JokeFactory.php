<?php

namespace Zaratedev\ChuckNorrisJokes;

class JokeFactory
{
    /**
     * @var array
     */
    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
    ];

    /**
     * JokeFactory construct.
     *
     * @param  array|null  $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    /**
     * Get a random joke.
     *
     * @return string
     */
    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
