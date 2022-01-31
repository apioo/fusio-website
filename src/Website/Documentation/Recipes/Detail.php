<?php

namespace App\Website\Documentation\Recipes;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Detail extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $recipe  = $this->getUriFragment('recipe');
        $recipes = $this->getRecipes();

        if (!preg_match('/^[A-Za-z0-9\-\_]{3,32}$/', $recipe)) {
            throw new StatusCode\BadRequestException('Invalid request');
        }

        $chapter = null;
        foreach ($recipes as $type => $chapters) {
            if (isset($chapters[$recipe])) {
                $parser  = new Yaml\Parser();
                $file    = __DIR__ . '/../../Resource/recipes/' . $type . '/' . $recipe . '.yaml';
                $chapter = $parser->parse(file_get_contents($file));
                break;
            }
        }

        if (empty($chapter)) {
            throw new StatusCode\NotFoundException('Invalid chapter');
        }

        $this->template->assign('subType', ucfirst($type));
        $this->template->assign('chapter', $chapter);
        $this->template->assign('recipes', $recipes);
    }

}
