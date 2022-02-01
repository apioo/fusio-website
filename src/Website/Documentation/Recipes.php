<?php

namespace App\Website\Documentation;

use App\Service\RecipeReader;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Recipes extends ViewAbstract
{
    #[Inject]
    private RecipeReader $recipeReader;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/../resource/documentation/recipes.php', [
            'recipes' => $this->recipeReader->findAll(),
        ]);
    }
}
