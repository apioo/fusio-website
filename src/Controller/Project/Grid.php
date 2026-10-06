<?php

namespace App\Controller\Project;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Grid extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/grid')]
    public function show(): mixed
    {
        $data = [
            'title' => 'Grid',
            'description' => 'Fusio Grid turns any MySQL, PostgreSQL or SQLite database into a secure, type-safe REST API with a single command.',
            'keywords' => 'Fusio Grid, Database to REST API, Instant API, CRUD API Generator, PostgREST Alternative, MySQL REST API, PostgreSQL REST API',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'headline' => 'Grid',
            'tagline' => 'Connect to any MySQL, PostgreSQL, or SQLite database to automatically expose your table schemas as secure, type-safe REST endpoints.',
        ];

        $templateFile = __DIR__ . '/../../../resources/template/project/grid.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
