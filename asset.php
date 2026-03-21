<?php

shell_exec('npx @tailwindcss/cli -i ./public/css/app.css -o ./public/css/app.min.css');

concat(__DIR__ . '/public/dist/app.min.css', [
    __DIR__ . '/public/css/prismjs.min.css',
    __DIR__ . '/public/css/app.min.css',
]);

concat(__DIR__ . '/public/dist/app.min.js', [
    __DIR__ . '/public/js/prismjs.min.js',
    __DIR__ . '/public/js/app.js',
]);

function concat(string $targetFile, array $files) {
    $result = [];
    foreach ($files as $file) {
        $result[] = file_get_contents($file);
    }
    file_put_contents($targetFile, implode("\n", $result));
}

