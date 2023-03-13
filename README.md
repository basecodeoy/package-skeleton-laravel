# package_name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/preemstudio/package_slug.svg?style=flat-square)](https://packagist.org/packages/preemstudio/package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/preemstudio/package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/preemstudio/package_slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/preemstudio/package_slug.svg?style=flat-square)](https://packagist.org/packages/preemstudio/package_slug)

package_description

## Installation

You can install the package via composer:

```bash
composer require preemstudio/package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="package_slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="package_slug-config"
```

This is the contents of the published config file:

```php
return [
    //
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="package_slug-views"
```

## Usage

Check our [test suite](/tests) for usage examples.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you've found a bug regarding security please mail [security@preem.studio](mailto:security@preem.studio) instead of using the issue tracker.

## Credits

- [Preem Studio](https://github.com/PreemStudio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
