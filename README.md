## About package_name

This project was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and is a package to package_description. Be sure to browse through the [changelog](CHANGELOG.md), [code of conduct](.github/CODE_OF_CONDUCT.md), [contribution guidelines](.github/CONTRIBUTING.md), [license](LICENSE), and [security policy](.github/SECURITY.md).

## Installation

> **Note**
> This package requires [PHP](https://www.php.net/) 8.2 or later, and it supports [Laravel](https://laravel.com/) 10 or later.

To get the latest version, simply require the project using [Composer](https://getcomposer.org/):

```bash
$ composer require faustbrian/package_slug
```

You can publish the migrations by using:

```bash
$ php artisan vendor:publish --tag="package_slug-migrations"
```

You can publish the configuration file by using:

```bash
$ php artisan vendor:publish --tag="package_slug-config"
```

You can publish the views by using:

```bash
$ php artisan vendor:publish --tag="package_slug-views"
```

## Usage

Please review the contents of [our test suite](/tests) for detailed usage examples.
