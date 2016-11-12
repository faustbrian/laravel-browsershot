# Laravel Browsershot

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-browsershot
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    BrianFaust\Browsershot\BrowsershotServiceProvider::class
];
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

```php
'Browsershot' => BrianFaust\Browsershot\Facades\Browsershot::class
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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
