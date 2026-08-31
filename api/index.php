<?php

// 1. Buat folder penyimpanan yang writable di /tmp (satu-satunya writable directory di Vercel Serverless)
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

// 2. Set environment paths agar semua cache & storage mengarah ke /tmp
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/bootstrap/cache/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/bootstrap/cache/routes-v7.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/bootstrap/cache/events.php';
if (empty($_ENV['SESSION_LIFETIME'])) {
    $_ENV['SESSION_LIFETIME'] = 120;
}
if (empty($_ENV['SESSION_DRIVER'])) {
    $_ENV['SESSION_DRIVER'] = 'cookie';
}

// Salin cached files jika ada di repository
if (is_file(__DIR__ . '/../bootstrap/cache/packages.php') && !is_file('/tmp/bootstrap/cache/packages.php')) {
    @copy(__DIR__ . '/../bootstrap/cache/packages.php', '/tmp/bootstrap/cache/packages.php');
}
if (is_file(__DIR__ . '/../bootstrap/cache/services.php') && !is_file('/tmp/bootstrap/cache/services.php')) {
    @copy(__DIR__ . '/../bootstrap/cache/services.php', '/tmp/bootstrap/cache/services.php');
}

// 3. Panggil Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 4. Hubungkan custom storage path
$app->useStoragePath('/tmp/storage');

// 5. Eksekusi Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);