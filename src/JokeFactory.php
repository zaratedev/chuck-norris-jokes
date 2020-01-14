<?php

namespace Zaratedev\ChuckNorrisJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'http://api.icndb.com/jokes/random';

    protected ?Client $http;

    /**
     * JokeFactory construct.
     *
     * @param  array|null  $jokes
     */
    public function __construct(Client $http = null)
    {
        $this->http = $http ?: new Client();
    }

    /**
     * Get a random joke.
     *
     * @return string
     */
    public function getRandomJoke()
    {
        $response = $this->http->get(self::API_ENDPOINT);

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value->joke;
    }
}
