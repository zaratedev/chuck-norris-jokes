<?php

namespace Zaratedev\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Zaratedev\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_random_default_joke()
    {
        $chuckNorrisJokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
