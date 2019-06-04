# Laravel Browsershot

[![Build Status](https://img.shields.io/travis/artisanry/Browsershot/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Browsershot)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/browsershot.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Browsershot.svg?style=flat-square)](https://github.com/artisanry/Browsershot/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Browsershot.svg?style=flat-square)](https://packagist.org/packages/artisanry/Browsershot)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/browsershot
```

## Usage

``` php
$browsershot = new Artisanry\Browsershot\Browsershot();
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

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
