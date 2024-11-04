#!/usr/bin/env php
<?php

function ask(string $question, string $default = ''): string
{
    $answer = \readline($question.($default ? " ({$default})" : null).': ');

    if (!$answer) {
        return $default;
    }

    return $answer;
}

function run(string $command): string
{
    return \trim((string) \shell_exec($command));
}

function slugify(string $subject): string
{
    return \mb_strtolower(\trim(\preg_replace('/[^A-Za-z0-9-]+/', '-', $subject), '-'));
}

function title_case(string $subject): string
{
    return \str_replace(' ', '', \ucwords(\str_replace(['-', '_'], ' ', $subject)));
}

function title_snake(string $subject, string $replace = '_'): string
{
    return \str_replace(['-', '_'], $replace, $subject);
}

function replace_in_file(string $file, array $replacements): void
{
    $contents = \file_get_contents($file);

    \file_put_contents(
        $file,
        \str_replace(
            \array_keys($replacements),
            \array_values($replacements),
            $contents,
        ),
    );
}

function remove_prefix(string $prefix, string $content): string
{
    if (\str_starts_with($content, $prefix)) {
        return \mb_substr($content, \mb_strlen($prefix));
    }

    return $content;
}

function determineSeparator(string $path): string
{
    return \str_replace('/', \DIRECTORY_SEPARATOR, $path);
}

$currentDirectory = \getcwd();
$folderName = \basename($currentDirectory);

$packageName = ask('Package name', $folderName);
$packageSlug = slugify($packageName);
$packageSlugWithoutPrefix = remove_prefix('laravel-', $packageSlug);

$className = title_case($packageName);
$className = ask('Class name', $className);
$description = ask('Package description', "This is my package {$packageSlug}");

$files = \explode(\PHP_EOL, run('grep -E -r -l -i ":author|:vendor|:package|VendorName|skeleton|migration_table_name|vendor_name|vendor_slug|author@domain.com|package_description|package_name|package_slug" --exclude-dir=vendor ./* ./.github/* | grep -v '.\basename(__FILE__)));

foreach ($files as $file) {
    replace_in_file($file, [
        'package_description' => $description,
        'package_name' => $packageName,
        'package_slug' => $packageSlug,
        'migration_table_name' => title_snake($packageSlug),
        'Skeleton' => $className,
        'skeleton' => $packageSlug,
    ]);

    match (true) {
        \str_contains($file, determineSeparator('src/Skeleton.php')) => \rename($file, determineSeparator('./src/'.$className.'.php')),
        \str_contains($file, determineSeparator('src/Facades/Skeleton.php')) => \rename($file, determineSeparator('./src/Facades/'.$className.'.php')),
        \str_contains($file, determineSeparator('src/Commands/SkeletonCommand.php')) => \rename($file, determineSeparator('./src/Commands/'.$className.'Command.php')),
        \str_contains($file, determineSeparator('database/migrations/create_skeleton_table.php.stub')) => \rename($file, determineSeparator('./database/migrations/create_'.title_snake($packageSlugWithoutPrefix).'_table.php.stub')),
        \str_contains($file, determineSeparator('config/skeleton.php')) => \rename($file, determineSeparator('./config/'.$packageSlugWithoutPrefix.'.php')),
        default => [],
    };
}

run('composer install && composer test');
\unlink(__FILE__);
