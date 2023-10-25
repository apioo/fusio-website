<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\NotFoundException;

class Comparison extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;

    public function __construct(ReverseRouter $reverseRouter)
    {
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/comparison')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Comparison | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        $templateFile = __DIR__ . '/../../resources/template/comparison.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    #[Get]
    #[Path('/comparison/:app')]
    public function detail(string $app): mixed
    {
        $types = $this->getAvailableTypes();
        if (in_array($app, $types)) {
            $type = $types[0];
        } else {
            $type = $app;
        }

        $data = [
            'title' => ucfirst($type) . ' alternative | Fusio',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'detail'], ['app' => $type]),
        ];

        $templateFile = __DIR__ . '/../../resources/template/comparison/' . $type . '.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    private function getAvailableTypes(): array
    {
        $types = scandir(__DIR__ . '/../../resources/template/comparison/');
        $types = array_filter($types, fn (string $type) => !str_starts_with($type, '.'));
        return $types;
    }
}
