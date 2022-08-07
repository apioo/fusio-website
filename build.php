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

    $downloadUrl = getAssetUrlForTag($version, $vendor, $httpClient);
    if (empty($downloadUrl)) {
        $downloadUrl = 'https://github.com/' . $vendor . '/archive/' . $version . '.zip';
    }

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
        'downloadUrl' => $downloadUrl,
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
    shell_exec('git pull');

    $data = shell_exec('git show-ref --tags -d');
    $tags = parseTags($data);

    usort($tags, 'version_compare');

    $latestVersion = array_pop($tags);

    chdir($cwd);

    return $latestVersion;
}

function getMeta($dir)
{
    $files = [
        $dir . '/app.yaml',
        $dir . '/src/app.yaml',
    ];

    foreach ($files as $appFile) {
        if (is_file($appFile)) {
            $data = \Symfony\Component\Yaml\Yaml::parse(file_get_contents($appFile));
            return [
                'description' => $data['description'] ?? '',
                'screenshot' => $data['screenshot'] ?? '',
                'website' => $data['website'] ?? '',
            ];
        }
    }

    return [
        'description' => '',
        'screenshot' => '',
        'website' => '',
    ];
}

function parseTags($data)
{
    $lines  = explode("\n", $data);
    $result = [];

    foreach ($lines as $line) {
        $parts    = explode(' ', $line);
        $sha1     = $parts[0] ?? null;
        $rawTag   = $parts[1] ?? null;
        $tagParts = explode('/', $rawTag);
        $tagName  = $tagParts[2] ?? null;
        $tagName  = rtrim($tagName, '^{}');

        if (str_contains($tagName, '-RC')) {
            // skip RC releases
            continue;
        }

        if (!empty($sha1) && !empty($tagName)) {
            $result[] = $tagName;
        }
    }

    return $result;
}

function getAssetUrlForTag(string $tagName, string $vendor, \GuzzleHttp\Client $httpClient): ?string
{
    $response = $httpClient->get(sprintf('https://api.github.com/repos/' . $vendor . '/releases'), [
        'verify' => false
    ]);

    if ($response->getStatusCode() !== 200) {
        return null;
    }

    $releases = \json_decode($response->getBody(), true);
    if (!is_array($releases)) {
        return null;
    }

    foreach ($releases as $release) {
        if ($release['tag_name'] === $tagName) {
            $url = $release['assets'][0]['browser_download_url'] ?? null;
            if (!empty($url)) {
                return $url;
            }
        }
    }

    return null;
}
