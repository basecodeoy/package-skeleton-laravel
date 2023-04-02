# package_name

[![Latest Version](https://badge.sh/packagist/version/PreemStudio/package_slug)](https://packagist.org/packages/preemstudio/package_slug)
[![Coding Standards](https://badge.sh/github/check-runs/PreemStudio/package_slug/main/coding-standards)](https://github.com/PreemStudio/package_slug/actions)
[![Security Analysis](https://badge.sh/github/check-runs/PreemStudio/package_slug/main/security-analysis)](https://github.com/PreemStudio/package_slug/actions)
[![Static Code Analysis](https://badge.sh/github/check-runs/PreemStudio/package_slug/main/static-code-analysis)](https://github.com/PreemStudio/package_slug/actions)
[![Tests](https://badge.sh/github/check-runs/PreemStudio/package_slug/main/tests)](https://github.com/PreemStudio/package_slug/actions)

package_name was created by, and is maintained by [Preem Studio](https://github.com/PreemStudio), and is a package_description. Be sure to browse through the
[changelog](CHANGELOG.md), [code of conduct](.github/CODE_OF_CONDUCT.md), [contribution guidelines](.github/CONTRIBUTING.md), [license](LICENSE), and [security policy](.github/SECURITY.md),

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

Please review the contents of [our test suite](/tests) for detailed usage examples.
