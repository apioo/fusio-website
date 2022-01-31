<?php

require_once __DIR__ . '/vendor/autoload.php';

$httpClient = new \GuzzleHttp\Client();
$data = json_decode(file_get_contents(__DIR__ . '/repositories.json'));
$marketplace = [];
$appsDir = __DIR__ . '/apps';

foreach ($data->repositories as $name => $vendor) {
    echo 'Update ' . $vendor . "\n";

    $git = 'https://github.com/' . $vendor . '.git';
    $version = checkout($appsDir . '/' . $name, $git);
    $meta = getMeta($appsDir . '/' . $name);
    $downloadUrl = 'https://github.com/' . $vendor . '/archive/' . $version . '.zip';

    $appFile = $appsDir . '/' . $name . '.zip';
    $httpClient->get($downloadUrl, [
        'sink' => $appFile,
        'verify' => false
    ]);

    if (!is_file($appFile)) {
        echo '* Could not download zip file' . "\n";
        continue;
    }

    $marketplace[$name] = array_merge([
        'version' => trim($version, 'v'),
        'downloadUrl' => 'https://github.com/' . $vendor . '/archive/' . $version . '.zip',
        'sha1Hash' => sha1_file($appFile),
    ], $meta);

    echo '* Check successful!' . "\n";
}

$yaml = \Symfony\Component\Yaml\Yaml::dump($marketplace);
file_put_contents(__DIR__ . '/public/marketplace.yaml', $yaml);

function checkout($name, $url)
{
    $cwd = getcwd();

    if (is_dir($name)) {
        chdir($name);
    } else {
        shell_exec('git clone ' . escapeshellarg($url) . ' ' . escapeshellarg($name));
        chdir($name);
    }

    shell_exec('git fetch');
    
    $data = shell_exec('git show-ref --tags -d');
    $tags = parseTags($data);

    usort($tags, 'version_compare');

    $latestVersion = array_pop($tags);

    chdir($cwd);

    return $latestVersion;
}

function getMeta($dir)
{
    $appFile = $dir . '/app.yaml';
    $data = [];
    if (is_file($appFile)) {
        $data = \Symfony\Component\Yaml\Yaml::parse(file_get_contents($appFile));
    }

    return [
        'description' => $data['description'] ?? '',
        'screenshot' => $data['screenshot'] ?? '',
        'website' => $data['website'] ?? '',
    ];
}

function parseTags($data)
{
    $lines  = explode("\n", $data);
    $result = [];

    foreach ($lines as $line) {
        $parts    = explode(' ', $line);
        $sha1     = isset($parts[0]) ? $parts[0] : null;
        $rawTag   = isset($parts[1]) ? $parts[1] : null;
        $tagParts = explode('/', $rawTag);
        $tagName  = isset($tagParts[2]) ? $tagParts[2] : null;
        $tagName  = rtrim($tagName, '^{}');

        if (!empty($sha1) && !empty($tagName)) {
            $result[] = $tagName;
        }
    }

    return $result;
}
