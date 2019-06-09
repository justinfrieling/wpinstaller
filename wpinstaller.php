#!/usr/bin/env php
<?php
if (file_exists(__DIR__.'/../../autoload.php')) {
    require __DIR__.'/../../autoload.php';
} else {
    require __DIR__.'/vendor/autoload.php';
}
$app = new Symfony\Component\Console\Application('Wordpress Installer', '0.0.1');
$app->add(new justinfrieling\Installer\Console\Command);
$app->run();