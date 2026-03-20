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
            'title' => 'Comparison',
            'description' => 'Compare Fusio with leading API management platforms like Supabase, Firebase, Kong, Tyk, and WSO2.',
            'keywords' => 'Fusio, API management, Supabase, Firebase, Kong, Tyk, WSO2, API gateway, backend-as-a-service, open-source API platform, self-hosted API, API development, API comparison, Fusio vs Supabase, Fusio vs Firebase, API management platforms',
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
            'title' => ucfirst($type) . ' alternative',
            'description' => $this->getDescription($type),
            'keywords' => 'Fusio, API management, ' . ucfirst($type) . ', open-source API platform, self-hosted API, API development, Fusio vs ' . ucfirst($type) . ', API management platforms',
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

    private function getDescription(string $type): string
    {
        return match ($type) {
            'kong' => 'Deciding between a high-performance network proxy and a programmable API management platform depends on where you need your logic to live. Kong scales your traffic; Fusio builds your API product.',
            'tyk' => 'Tyk is a high-performance, Go-based gateway optimized for microservices and multi-protocol traffic. Fusio is an application-level platform that simplifies the creation, logic, and hosting of API products.',
            'wso2' => 'WSO2 is a massive, full-lifecycle integration hub for complex corporate ecosystems. Fusio is a streamlined, programmable alternative for teams who want to implement API logic and management in one cohesive, lightweight package.',

            'firebase' => 'Firebase offers an "instant backend" tightly coupled with Google Cloud. Fusio provides a self-hosted platform to build structured, standardized API products on top of your own SQL infrastructure.',
            'supabase' => 'Supabase provides a powerful, instant backend focused on PostgreSQL. Fusio provides a programmable API layer that can wrap any database or service into a governed API product.',
            'appwrite' => 'Appwrite provides a complete suite of integrated services (Auth, DB, Storage) for rapid app development. Fusio provides a professional API gateway and implementation layer to turn any data source into a governed API product.',

            'postgrest' => 'PostgREST provides a high-speed, automatic RESTful interface directly from your PostgreSQL schema. Fusio takes a similar data-driven approach but adds a sophisticated layer for custom logic, multi-database support, and professional API governance.',
            'hasura' => 'Hasura is a JIT compiler that transforms GraphQL into highly optimized SQL. Fusio is an application-level engine designed to wrap complex business logic and database access into governed, professional API products.',
            'dreamfactory' => 'DreamFactory excels at instant, automated RESTful mapping for hundreds of data sources. Fusio provides a more surgical, code-first approach to building API products with integrated developer governance.',

            'strapi' => 'Strapi provides a powerful, visual UI for content editors to manage data that is then served via API. Fusio provides a professional gateway and development environment for engineers to build, secure, and monetize custom API products.',
            'directus' => 'Directus turns your database into a visual "Data Studio" with instant APIs. Fusio turns your database into a "Governed API Product" with professional lifecycle tools and consumer-facing portals.',
            'ghost' => 'Ghost is a world-class headless CMS optimized for modern journalism and membership businesses. Fusio is an API engine designed to wrap any database or business logic into a governed, scalable API product.',

            'symfony' => 'Symfony provides the professional-grade PHP components used by the world\'s largest applications, including Fusio. While Symfony gives you the tools to build anything, Fusio uses those tools to provide a ready-to-use API management platform.',
            'laravel' => 'Laravel is the gold standard for rapid full-stack development. Fusio is a specialized API management platform that automates the "plumbing" of your API, allowing you to focus purely on business logic and delivery.',
            'api-platform' => 'API Platform is the industry standard for generating high-performance Hypermedia and GraphQL APIs directly from Symfony entities. Fusio serves as a dedicated API gateway and management layer, providing the "business" infrastructure (portals, monetization, and multi-language workers) that frameworks usually leave to the developer.',

            default => '',
        };
    }
}
