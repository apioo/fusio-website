<?php

namespace App\Controller\Blog;

use App\Table;
use App\Table\Generated\BlogRow;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Http\Exception as StatusCode;

class Detail extends ControllerAbstract
{
    private Table\Blog $blogTable;
    private ReverseRouter $reverseRouter;

    public function __construct(Table\Blog $blogTable, ReverseRouter $reverseRouter)
    {
        $this->blogTable = $blogTable;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/blog/post/:title')]
    protected function show(string $title): mixed
    {
        $entry = $this->blogTable->findOneByTitleSlug($title);
        if (!$entry instanceof BlogRow) {
            throw new StatusCode\NotFoundException('Entry not found');
        }

        $data = [
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show'], [$entry->getTitleSlug()]),
            'entry' => $entry,
        ];

        $templateFile = __DIR__ . '/../../../resources/template/blog/detail.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }
}
