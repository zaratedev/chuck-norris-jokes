# Chuck Norris Jokes

Create chuck norris jokes in your next PHP Project

[![Build Status](https://travis-ci.org/zaratedev/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/zaratedev/chuck-norris-jokes)
[![StyleCI](https://styleci.io/repos/211190613/shield)](https://styleci.io/repos/211190613)

## Installation

Require the package using composer:

```bash
composer require zaratedev/chuck-norris-jokes
```

## Usage

```php
use Zaratedev\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)