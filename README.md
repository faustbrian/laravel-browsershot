# Laravel Browsershot

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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
