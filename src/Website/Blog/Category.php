<?php

namespace App\Website\Blog;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Sql\Condition;

class Category extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $table        = $this->tableManager->getTable('Fusio\Website\Table\Blog');
        $category     = $this->getUriFragment('category');
        $totalResults = $table->getCount(new Condition(['category', 'LIKE', '%' . $category . '%']));

        if ($totalResults > 0) {
            $selfUrl      = $this->reverseRouter->getUrl(__METHOD__, ['category' => $category]);
            $startIndex   = $this->getStartIndex();

            $this->setBody([
                'totalResults' => $totalResults,
                'startIndex'   => $startIndex,
                'entry'        => $table->getEntriesByCategory($category, $startIndex),
                'links'        => $this->getLinks($selfUrl, $startIndex, $totalResults),
            ]);
        } else {
            throw new StatusCode\NotFoundException('Category does not exist');
        }
    }

}
