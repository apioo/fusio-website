<?php

namespace App\Website\Blog;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Detail extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $table = $this->tableManager->getTable('Fusio\Website\Table\Blog');
        $entry = $table->getOneByTitleSlug($this->getUriFragment('title'));

        if ($entry instanceof RecordInterface) {
            $this->template->set('blog_detail.php');

            $this->setBody($entry);
        } else {
            throw new StatusCode\NotFoundException('Entry not found');
        }
    }

}
