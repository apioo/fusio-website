<?php

namespace App\Website\Blog;

use App\Table\Blog;
use App\Table\Generated\BlogRow;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Sql\TableManagerInterface;

class Detail extends ViewAbstract
{
    #[Inject]
    private TableManagerInterface $tableManager;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $table = $this->tableManager->getTable(Blog::class);
        $entry = $table->findOneByTitleSlug($context->getUriFragment('title'));

        if (!$entry instanceof BlogRow) {
            throw new StatusCode\NotFoundException('Entry not found');
        }

        return $this->render(__DIR__ . '/../resource/blog/detail.php', $entry);
    }
}
