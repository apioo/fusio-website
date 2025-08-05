<?php

namespace App\Controller;

use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Client\ClientInterface;
use PSX\Http\Client\GetRequest;

class Imprint extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter, private ClientInterface $httpClient, private CacheItemPoolInterface $cache)
    {
    }

    #[Get]
    #[Path('/imprint')]
    public function show(): mixed
    {
        $item = $this->cache->getItem('fusio-imprint');
        if ($item->isHit()) {
            $imprint = $item->get();
        } else {
            $response = $this->httpClient->request(new GetRequest('https://www.apioo.de/files/imprint.html'));

            $imprint = (string) $response->getBody();

            $item->expiresAfter(60 * 60 * 24 * 7);
            $item->set($imprint);
            $this->cache->save($item);
        }

        $data = [
            'title' => 'Imprint | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'imprint' => $imprint,
        ];

        $templateFile = __DIR__ . '/../../resources/template/imprint.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
