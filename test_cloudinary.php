<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

file_put_contents('test.txt', 'hello world cloudinary');

try {
    $res = cloudinary()->uploadApi()->upload(__DIR__.'/test.txt', ['folder' => 'test', 'resource_type' => 'raw']);
    echo "SUCCESS: " . $res['secure_url'] . "\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
