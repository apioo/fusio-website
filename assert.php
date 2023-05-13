<?php

concat(__DIR__ . '/public/css/app.min.css', [
    __DIR__ . '/public/css/bootstrap.min.css',
    __DIR__ . '/public/css/bootstrap-icons.min.css',
    __DIR__ . '/public/css/app.css',
]);

concat(__DIR__ . '/public/js/app.min.js', [
    __DIR__ . '/public/js/bootstrap.min.js',
]);

function concat(string $targetFile, array $files) {
    $result = [];
    foreach ($files as $file) {
        $result[] = file_get_contents($file);
    }
    file_put_contents($targetFile, implode("\n", $result));
}