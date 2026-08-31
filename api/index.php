<?php

// 1. Arahkan direktori storage & cache ke /tmp (direktori yang writable di Vercel Serverless)
$appDirs = ['/tmp/storage/framework/views', '/tmp/storage/framework/cache', '/tmp/storage/logs', '/tmp/bootstrap/cache'];
foreach ($appDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Set environment variable folder tmp
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// 3. Load Autoloader & Application Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 4. Custom Storage Path untuk Serverless
$app->useStoragePath('/tmp/storage');

// 5. Eksekusi Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);