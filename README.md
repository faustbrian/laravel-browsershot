# Laravel Browsershot

I would appreciate you taking the time to look at my [Patreon](https://www.patreon.com/faustbrian) and considering to support me if I'm saving you some time with my work.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-browsershot
```

## Usage

``` php
$browsershot = new BrianFaust\Browsershot\Browsershot();
$browsershot
    ->setUri('http://www.google.com')
    ->setPreset('apple_iphone_7')
    // ->setWidth(375)
    // ->setHeight(667)
    ->setTimeout(5000)
    ->save(storage_path('app/browsershots/google.jpg'));
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
