<?php

namespace App\Website\Documentation\Recipes;

use App\Service\RecipeReader;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception\BadRequestException;
use PSX\Http\Exception\NotFoundException;
use Symfony\Component\Yaml\Parser;

class Detail extends ViewAbstract
{
    #[Inject]
    private RecipeReader $recipesReader;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $recipe  = $context->getUriFragment('recipe');
        $recipes = $this->recipesReader->findAll();

        if (!preg_match('/^[A-Za-z0-9\-\_]{3,32}$/', $recipe)) {
            throw new BadRequestException('Invalid request');
        }

        $type = null;
        $chapter = null;
        foreach ($recipes as $type => $chapters) {
            if (isset($chapters[$recipe])) {
                $parser  = new Parser();
                $file    = __DIR__ . '/../../resource/recipes/' . $type . '/' . $recipe . '.yaml';
                $chapter = $parser->parse(file_get_contents($file));
                break;
            }
        }

        if (empty($chapter)) {
            throw new NotFoundException('Invalid chapter');
        }

        return $this->render(__DIR__ . '/../../resource/documentation/recipes.php', [
            'subType' => ucfirst($type),
            'chapter' => $chapter,
            'recipes' => $recipes,
        ]);
    }
}
