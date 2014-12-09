<?php
if (isset($_ENV['BOOTSTRAP_CLEAR_CACHE_ENV'])) {
    passthru(sprintf(
        'php "%s/console" cache:clear --env=%s --no-warmup',
        __DIR__,
        $_ENV['BOOTSTRAP_CLEAR_CACHE_ENV']
    ));
}

$_SERVER['env'] = 'test';
$_SERVER['KERNEL_DIR'] = 'app';

require __DIR__ . '/bootstrap.php.cache';