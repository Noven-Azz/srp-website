<?php

// 1. Buat folder penyimpanan yang writable di /tmp
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Helper function agar tersimpan di $_ENV, $_SERVER, dan getenv()
$setEnv = function ($key, $val) {
    $_ENV[$key] = $val;
    $_SERVER[$key] = $val;
    putenv("{$key}={$val}");
};

// 2. Set environment variables
$setEnv('APP_STORAGE', '/tmp/storage');
$setEnv('VIEW_COMPILED_PATH', '/tmp/storage/framework/views');
$setEnv('APP_SERVICES_CACHE', '/tmp/bootstrap/cache/services.php');
$setEnv('APP_PACKAGES_CACHE', '/tmp/bootstrap/cache/packages.php');
$setEnv('APP_CONFIG_CACHE', '/tmp/bootstrap/cache/config.php');
$setEnv('APP_ROUTES_CACHE', '/tmp/bootstrap/cache/routes-v7.php');
$setEnv('APP_EVENTS_CACHE', '/tmp/bootstrap/cache/events.php');

if (empty($_ENV['SESSION_DRIVER'])) {
    $setEnv('SESSION_DRIVER', 'cookie');
}

// Salin cache bootstrap dari repo jika ada
if (is_file(__DIR__ . '/../bootstrap/cache/packages.php') && !is_file('/tmp/bootstrap/cache/packages.php')) {
    @copy(__DIR__ . '/../bootstrap/cache/packages.php', '/tmp/bootstrap/cache/packages.php');
}
if (is_file(__DIR__ . '/../bootstrap/cache/services.php') && !is_file('/tmp/bootstrap/cache/services.php')) {
    @copy(__DIR__ . '/../bootstrap/cache/services.php', '/tmp/bootstrap/cache/services.php');
}

// 3. Autoload & Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Bind custom storage path ke container Laravel
$app->useStoragePath('/tmp/storage');

// 4. Menerima & Menjalankan Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);