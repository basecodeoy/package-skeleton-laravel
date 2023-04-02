# Contributing

Contributions are **welcome** and will be fully **credited**. Please review these guidelines before continuing.

## Guidelines

* Please follow the [Coding Style Guide](https://github.com/PreemStudio/php-cs-fixer-config/blob/main/src/Presets/Standard.php).
* Ensure that the current tests pass, and if you've added something new, add the tests where relevant.
* Send a coherent commit history, making sure each commit in your pull request is meaningful.
* You may need to [rebase](https://git-scm.com/book/en/v2/Git-Branching-Rebasing) to avoid merge conflicts.
* If you are changing or adding to the behaviour or public API, you may need to update the docs.
* Please remember that we follow [Semantic Versioning](https://semver.org/).

## Running Tests

First, install the dependencies using [Composer](https://getcomposer.org/):

```bash
$ composer install
```

Then run [Pest](https://pestphp.com/):

```bash
$ composer test
```

* The tests will be automatically run by [GitHub Actions](https://github.com/features/actions) against pull requests.

## Credits

- [Preem Studio](https://github.com/PreemStudio)
- [All Contributors](../../../contributors)
